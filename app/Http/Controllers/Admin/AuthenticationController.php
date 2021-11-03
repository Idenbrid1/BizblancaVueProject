<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MailUserRegisterVerification;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Validator;

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
                $company = new Company;
                $company->company_name = $request->company_name;
                $company->email = $request->email; 
                $company->phone = $request->phone;
                $company->user_id = $User->id;
                $company->save(); 
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
            return redirect('/signin')->with('success', 'Your Account Verified Successfully.Thanks');
        }
        else
        {
            return redirect('/signin')->with('error', 'Sorry your email cannot be identified.');
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
}
