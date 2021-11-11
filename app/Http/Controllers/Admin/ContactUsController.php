<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use View;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactus_messages = ContactUs::where('status', 'Not Reviewed')->orderBy('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/contact_us_list', ['contactus_messages'=>$contactus_messages, 'status'=>'Not Reviewed']);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('footer','adminpanel/partials/footer');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function indexReviewed()
    {
        $contactus_messages = ContactUs::where('status', 'Reviewed')->orderBy('created_at', 'DESC')->get();

        $view = View::make('adminpanel/pages/contact_us_list', ['contactus_messages'=>$contactus_messages, 'status'=>'Reviewed']);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('footer','adminpanel/partials/footer');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        ContactUs::create($request->all());
        return redirect()->back();
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

    }

    public function updateStatus($id)
    {
        $contactus = ContactUs::find($id);
        $contactus->status = "Reviewed";
        if ($contactus->save()) {
            return response()->json([
                'Status' => "Success",
                "Message" => "Status Updated Successfully!"
            ]);
        } else {
            return response()->json([
                'Status' => "Failed",
                "Message" => "Status can't Update"
            ]);
        }
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
