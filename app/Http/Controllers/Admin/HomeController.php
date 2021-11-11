<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use View;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\ContactUs;
use App\Models\News;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications()->orderby('created_at', 'DESC')->limit(5)->get();
        $noOfUsers = User::count();
        $noOfCandidate = Candidate::count();
        $noOfCompany = Company::count();
        $noOfContactusMessages = ContactUs::where('status', 'Not Reviewed')->count();
        $noOfActiveNews = News::where('status', 'Active')->count();
        $noOfDeActiveNews = News::where('status', 'DeActive')->count();

        $view = View::make('adminpanel/pages/dashboard', compact('noOfUsers', 'noOfCandidate', 'noOfCompany', 'noOfContactusMessages', 'noOfActiveNews', 'noOfDeActiveNews', 'notifications'));
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header', compact('notifications'));
        $view->nest('footer','adminpanel/partials/footer');
        return $view;
    }

}
