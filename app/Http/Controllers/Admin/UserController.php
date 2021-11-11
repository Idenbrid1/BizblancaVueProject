<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use View;
use Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('status', 'Active')->orderby('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/user_list', ['users'=>$users]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

    public function getDeActivatedList()
    {
        $users = User::where('status', 'Inactive')->orderby('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/user_list', ['users'=>$users]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

    public function deActivate($id)
    {
        $user = User::find($id);
        if($user)
        {
            $user->status = 'Inactive';
            $user->update();
            return response()->json([
                'Status' => "Success",
                "Message" => "User Updated!"
            ]);
        }
        else{
            return response()->json([
                'Status' => "Fail",
                "Message" => "User Not Found!"
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
