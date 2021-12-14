<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Mail\EmailResetPassword;
use App\Mail\MailUserRegisterVerification;
use App\Models\Candidate;
use App\Models\CandidateAppliedJob;
use App\Models\User;
use App\Models\Company;
use App\Models\Order;
use App\Models\Package;
use App\Models\PasswordReset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Validator;
use DB;
use Laravel\Socialite\Facades\Socialite;


class AuthenticationController extends Controller
{
    protected  function userRegistration(Request $request)
	{
        // return $request;
        $attributeNames = [
            'name'              => 'Name',
            'phone'              => 'Phone',
            'email'             => 'Email',
            'password'          => 'Password',
            'confirm_password'  => 'Confirm Password',
        ];

        $messages = [
            
        ];
        if($request->type == 'candidate')
        {
            $rules = [
                'email'             => 'required|unique:users|max:100|email',
                'name'             => 'required',
                'phone'             => 'required',
                'password'          => 'required|min:6',
                'confirm_password'  => 'required|same:password',
            ];
        }
        if($request->type == 'company')
        {
            $rules = [
                'email'             => 'required|unique:users|max:100|email',
                'company_name'      => 'required|unique:companies|max:100',
                'name'              => 'required',
                'phone'             => 'required',
                'password'          => 'required|min:6',
                'confirm_password'  => 'required|same:password',
            ];
        }

        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }
        else
        {
            $request->request->add([
                'type' => $request->type,
                'password' => Hash::make($request->password),
                'status' => 'Inactive',
                'code' => str_replace('/', '', Hash::make(uniqid())),
            ]);
            $User = User::create($request->all());
            if($request->type == 'company')
            {
                $package = Package::where('title', 'Free')->first();
                $company = new Company;
                $company->company_name = $request->company_name;
                $company->email = $request->email; 
                $company->phone = $request->phone;
                $company->user_id = $User->id;
                $company->package_id = $package->id;
                $company->save(); 
                $create_Order = Order::create([
                    'package_id' => 1,
                    'company_id' => $company->id,
                    'user_id' => $User->id,
                    'start_date' => Carbon::now(),
                    'status' => 'active',
                ]);
                $company->order_id = $create_Order->id;
                $company->update();
            }
            if($request->type == 'candidate')
            {
                $candidate = new Candidate;
                $candidate->full_name = $User->name;
                $candidate->email = $User->email;
                $candidate->phone = $User->phone;
                $candidate->user_id = $User->id;
                $candidate->save(); 
            }
            Mail::to($User->email)->send(new MailUserRegisterVerification($User));
            return response()->json([
                'success' => true,
                'user' => Auth::user(),
            ]);
        }
    }

    public function verifyUser($token)
    {   
        $verifyUser = User::where('code', $token)->where('status', 'Inactive')->first();
        if(isset($verifyUser)){
            $verifyUser->status = 'Active';
            $verifyUser->update();
            return redirect('/#/signin')->with('success', 'Your Account Verified Successfully.Thanks');
        }
        else
        {
            return redirect('/#/signin')->with('error', 'Sorry your email cannot be identified.');
        }
        
    }

    public function userLogin(Request $request)
    {
        $attributeNames = [
            'email' => 'Email',
            'password' => 'Password',
        ];

        $messages = [
            // 'text.unique_with' => 'This Company Already Exist!',
        ];

        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->setAttributeNames($attributeNames);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }
        else
        {
            $Credentials = [
                'email'     => $request->email,
                'password'  => $request->password,
            ];
            if(Auth::attempt($Credentials)){
                $User = User::where('email', $request->email)->first();
                if($User->status == 'Inactive') {
                    Auth::logout();
                    return response()->json([
                        'status' => 'activation',
                        'message' => 'Your account is not active yet, Kindly check your email',
                    ]);
                }
                else
                {
                    if($request->remember_me == true)
                    {
                        Auth::login($User, true);
                    }
                    Auth::login($User);
                    return response()->json([
                        "message" =>"Login Successfully!",
                        'success' => true,
                        'user' => Auth::user(),
                    ]);
                }
            }
            else
            {
                return response()->json([
                    'success' => 'credentials',
                    'errors' => 'Credentials Not Matched',
                ]);
            }
        }

    }

    public function resetPasswordPost(Request $request)
    {
        $rules = array(
            'email' => 'required|max:100|email',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return response()->json([
                'success'   => false,
                'errors' => $validator->errors(),
            ]);
        }
        else
        {
            $user = User::where('email', $request->email)->get();
            if($user->count() > 0){
                $userData = PasswordReset::where('email', $request->email)->get();
                if($userData->count()){
                    return response()->json([
                        'success'   => 'sent',
                        'message'   => 'Reset password email already sent!',
                        'type'      => 'error',
                    ]);
                }
                else
                {
                    $user = User::find($user->first()->id);
		            $request->request->add([
		                'user_id' 	=> $user->id,
		                'email' 	=> $user->email,
		                'token' 	=> Hash::make(uniqid()),
		            ]);
		            $request->request->add([
		            	'token'		=> str_replace('/', '', $request->token),
                    ]);
                    
                    try{
                        $transaction = DB::transaction(function () use ($request, $user) {
                            $PasswordReset = PasswordReset::create($request->all());

                            Mail::to($user->email)->send(new EmailResetPassword($user, $PasswordReset));
                        });

                    }catch(Exception $e){
                        throw new Exception('Error in transaction');
                    }

                    return response()->json([
                        'success'   => true,
                        'message'   => 'We sent you an reset password link! Check your email.',
                        'type'      => 'success',
                    ]);   
                }
            }
            else
            {
                return response()->json([
                    'success'   => 'notfount',
                    'message'   => 'Email not Found!',
                    'type'      => 'error',
                ]);   
            }
        }
    }

    public function resetPasswordForm($user_id, $token)
    {
        if(!Auth::check()){
            return redirect('/#/candidate-new-password')
            ->with('user_id', $user_id)
            ->with('token', $token);
        }
        else
        {
            return redirect(url('/'));
        }
    }

    public function resetPasswordFormPost(Request $request)
    {
        $attributeNames = [
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',
            'token' => 'Token',
        ];

        $messages = [
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',
            'token' => 'Token',
        ];

        $rules = array(
            'password'          => 'required|min:6',
            'confirm_password'  => 'required|same:password',
            'token'  => 'required',
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all(),
                "type" => "Allerrors",
            ], 200);
        }
        else
        {
            $userExist = PasswordReset::where('token', $request->token)->first();
            
            if($userExist)
            {
                try{
                    $transaction = DB::transaction(function () use ($request, $userExist) {
                        $user = User::where('email', $userExist->email)->first();
                        PasswordReset::where('token', $request->token)->delete();
                        $request->request->add([
                            'password' => Hash::make($request->password),
                        ]);
                        $user->password = $request->password;
                        $user->update();
                    });

                }catch(Exception $e){
                    throw new Exception('Error in transaction');
                }

                return response()->json([
                    'success' => true,
                    "message" => "Password Reset Successfully!",
                    "type"    => "success",
                ]);
            }
            else
            {
                return response()->json([
                    'success'   => true,
                    'message'   => 'Invalid or expired activation code.!',
                    'type'      => 'error',
                ]);
            }
        }
        
    }

    public function checkCandidateRole()
    {
        if(Auth::check())
        { 
            if(Auth::user()->type == 'candidate')
            {
                return response()->json([
                    'success'   => true,
                ]);   
            }
            else{
                return response()->json([
                    'success'   => false,
                ]);
            }
        }
        else{
            return response()->json([
                'success'   => false,
            ]);
        }
    }

    public function checkCompanyRole()
    {
        if(Auth::check())
        { 
            if(Auth::user()->type == 'company')
            {
                return response()->json([
                    'success'   => true,
                ]);   
            }
            else{
                return response()->json([
                    'success'   => false,
                ]);
            }
        }
        else{
            return response()->json([
                'success'   => false,
            ]);
        }
    }

    public function navbarCheckRole()
    {
        // return UserResource::collection(User::all());
        if(Auth::check())
        { 
            if(Auth::user()->type == 'company')
            {
                return response()->json([
                    'success'   => true,
                    'role'   => 'company',
                ]);   
            }
            if(Auth::user()->type == 'candidate'){
                return response()->json([
                    'success'   => true,
                    'role'   => 'candidate',
                ]);
            }
        }
        else{
            return response()->json([
                'success'   => false,
            ]);
        }
    }

    public function resetPassword($token)
    {
        return redirect('/#/candidate-new-password'.$token);
    }

    public function userLogout()
    {
        Auth::logout();
        return response()->json([
            'success'   => true,
        ]);

    }

    public function checkAuth()
    {
        if(Auth::check())
        {
            return response()->json([
                'isAuth'   => true,
            ]);
        }
        else{
            return response()->json([
                'isAuth'   => false,
            ]);
        }
    }

    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback() {
        try{
            $user = Socialite::driver('google')->user();
            //dd($user);
            $finduser = User::where('email', $user->email)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $newUser = User::create([
                    'name' => $user->name, 
                    'email' => $user->email,
                    'password' => Hash::make(123456789), 
                    'google_id' => $user->id
                ]);
                Auth::login($newUser);
                return redirect('/');
                // return redirect()->back();
            }
        }
        catch(Exception $e) {
            dd($e->getMessage());
            // return redirect('auth/google');
        }
    }
   
}
