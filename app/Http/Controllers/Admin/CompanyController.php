<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PaymentApprovalInvoice;
use App\Models\Company;
use App\Models\Order;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use View;
use Mail;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        $view = View::make('adminpanel/pages/company_index', compact('companies'));
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
    public function packageCompanies()
    {
        $orders = Order::all();
        foreach($orders as $order)
        {
            $companies[] = Company::where('id', $order->company_id)->with(['Package', 'Order'])->first();
        }
        return view('adminpanel/pages/order_companies', compact('companies'));
    }

    public function payNow($id)
    {
        $order = Order::find($id);
        $order->status = 'active';
        $order->start_date = Carbon::now();
        $package = Package::find($order->package_id);
        $order->end_date = Carbon::now()->addDay($package->duration);
        $order->update();
        $order->touch();
        $company = Company::find($order->company_id);
        $company->post_job_count = 0;
        $company->update();
        Mail::to($company->email)->send(new PaymentApprovalInvoice($company));
        return back();
    }
}
