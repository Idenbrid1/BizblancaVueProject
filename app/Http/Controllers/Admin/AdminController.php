<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use View;
use Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::where('status', 'Active')->orderby('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/admin_list', ['admins'=>$admins]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

    public function getDeActivatedList()
    {
        $admins = Admin::where('status', 'Inactive')->orderby('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/admin_list', ['admins'=>$admins]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

    public function deActivate($id)
    {
        $GetAdmin = Admin::findorfail($id);
        if($GetAdmin->status == 'Active')
        {
            $GetAdmin->status = 'Inactive';
        }
        else
        {
            $GetAdmin->status = 'Active';
        }
        if($GetAdmin->update())
        {
            return response()->json([
                'Status' => "Success",
                "Message" => "Status Updated Successfully!"
            ]);
        }
        else{
            return response()->json([
                'Status' => "Error",
                "Message" => "Id not found!"
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = View::make('adminpanel/pages/admin_create');
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'type' => [],
            'phone' => [],
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $er = $validator->errors();
            return redirect()->back()->withErrors($validator)->with('Status', "Failed")->with("Message", "User not Created Check Validations");
        } else {
            $ValidatedData = $request->input();
        }
        $ValidatedData['password'] = Hash::make($request->password);
        if (User::create($ValidatedData)) {
            return redirect()->back()->with('Status', "Success")->with("Message", "User Created Successfully");
        } else {
            return redirect()->back()->with('Status', "Failed")->with("Message", "User not Created");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showSettingPage()
    {
        $view = View::make('adminpanel/pages/admin_setting');
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

    public function updateSetting(Request $request)
    {
        $request->validate([
            'email' => 'required|max:40|unique:users,email,'.Auth::guard('admin')->id().',id',
            'password' => 'same:confirm_password',
        ]);

        if(Auth::guard('admin')->check()){
            $inputs = $request->all();
            if($request->hasfile('profile_image'))
            {
                $image = $request->image;
                $name=time() . '_'. $request->name . '.'. $image->getClientOriginalExtension();
                $image->move(public_path().'/storage/images/admins/', $name);
                $inputs['profile_image'] = $name;
            }
            if($request->password == null){
                unset($inputs['password']);
                unset($inputs['confirm_password']);
            }
            else{
                $inputs['password'] = Hash::make($request->password);
            }

            $user = Admin::find(Auth::guard('admin')->id());
            $user->update($inputs);

            return redirect()->back();

        }else{
            return redirect()->route('admin.login');
        }
    }
}
