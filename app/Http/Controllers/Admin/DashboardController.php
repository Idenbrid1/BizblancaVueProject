<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\ContactUs;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = View::make('adminpanel/pages/dashboard');
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function markNotification(Request $request)
    {
        auth()->user()->unreadNotifications
        ->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        })
        ->markAsRead();

        return response()->noContent();

    }

    public function fetchNotification()
    {
        $notifications = auth()->user()->unreadNotifications()->orderby('created_at', 'DESC')->limit(5)->get();
        return response()->json(['notifications'=>$notifications]);   
    }

    public function notifications()
    {
        $allNotifications = auth()->user()->unreadNotifications;
        $notifications = auth()->user()->unreadNotifications()->orderby('created_at', 'DESC')->limit(5)->get();;
        $view = View::make('adminpanel/pages/notifications', compact('allNotifications'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header', compact('notifications'));
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

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
