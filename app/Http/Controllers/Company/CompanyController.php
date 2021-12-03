<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Mail\SendInvoiceMail;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\JobPost;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Validator;
use App;
use App\Models\CandidateAppliedJob;
use App\Models\CompanyWishList;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Mail;
use PDF;

class CompanyController extends Controller
{
    public function getCompanyProfile()
    {
        $user_id = Auth::user()->id;
        $company = Company::where('user_id', $user_id)->with(['Order', 'Package'])->first();
        $order = Order::where('company_id', $company->id)->first();
        if($order){
            if($order->status == 'active')
            {
                if($company->order['job_post'] == $company->post_job_count)
                {
                    return response()->json([
                        'success' => false,
                        'company' => $company,
                        'response' => 'exceeded'
                    ]);
                }
                else{
                    return response()->json([
                        'success' => true,
                        'company' => $company,
                    ]);
                }
            }else if($company->order['status'] == 'expire'){
                return response()->json([
                    'company' => $company,
                    'response' => 'expire'
                ]);
            }
            else if($company->order['status'] == 'pending'){
                return response()->json([
                    'company' => $company,
                    'response' => 'pending'
                ]);
            }
            else{
                return response()->json([
                    'company' => $company,
                    'response' => 0
                ]);
            }
        }else{
                return response()->json([
                    'company' => $company,
                    'response' => 0
                ]);
            }
        
    }

    public function updateCompanyBasicInformation(Request $request)
    {
        $user = Auth::user();
        $company = Company::where('user_id', $user->id)->first();
        // $company->name = $request->name;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->phone = $request->phone;
        $company->ceo = $request->ceo;
        $company->web_link = $request->web_link;
        $company->establish_at = $request->establish_at;
        $company->no_of_employees = $request->no_of_employees;
        $company->description = $request->description;
        $company->industry = $request->industry;
        $company->user_id = Auth::user()->id;
        if($request->file('companyLogo')) 
        {   
            $file = $request->file('companyLogo');
            $imagefilename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $location = 'storage/images/companies/';
            $file->move($location,$imagefilename);
            File::delete($location.$company->logo);
            $company->logo = $imagefilename;
        }
        $company->update();
        return back();
    }

    public function socialmediaupdate(Request $request)
    {     
        $user = Auth::user();
        $company = Company::where('user_id', $user->id)->first();
        $company->whatsapp = $request->whatsapp;
        $company->facebook = $request->facebook;
        $company->linkedin = $request->linkedin;
        $company->twitter = $request->twitter;
        $company->github = $request->github;
        if($request->file('companyGallery')) 
        {   
            foreach($request->companyGallery as $gallery)
            {
                $file = $gallery;
                $imagefilename = $file->getClientOriginalName();
                $galleryfilenamearray[] = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $location = 'storage/images/companies/';
                $file->move($location,$imagefilename);
                File::delete($location.$company->profile_gallery);
            }
            $company->profile_gallery = implode(',', $galleryfilenamearray);
        }
        if($request->file('companyVideo')) 
        {   
            $file = $request->file('companyVideo');
            $imagefilename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $location = 'storage/images/companies/';
            $file->move($location,$imagefilename);
            File::delete($location.$company->profile_video);
            $company->profile_video = $imagefilename;
        }
        $company->update();
        return back();
    }

    public function jobPost(Request $request)
    {
        $attributeNames = [
            'banner' => 'banner',
            'job_title' => 'Job Title',
            'job_designation' => 'Job Designation',
            // 'salary_type' => 'Salary Type',
            'salary_range' => 'Salary Range',
            'shift' => 'Shift',
            'experience' => 'Experience',
            'location' => 'Location',
            'job_type' => 'Job Type',
            'gender' => 'Gender',
            'total_positions' => 'Total Positions',
            'job_description' => 'Job Description',
            // 'job_responsibilities' => 'Job Responsibilities',
            'qualification_level' => 'qualification',
            // 'benefits' => 'Benefits',
            'status' => 'Status',
        ];
        $rules = array(
            'banner' => 'required',
            'job_title' => 'required',
            'job_designation' => 'required',
            // 'salary_type' => 'required',
            'salary_range' => 'required',
            'shift' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'gender' => 'required',
            'total_positions' => 'required',
            'job_description' => 'required',
            // 'job_responsibilities' => 'required',
            'qualification_level' => 'required',
            // 'benefits' => 'required',
            'status' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false,
            ], 200);
        }
        else
        {
            $user = Auth::user();
            $company = Company::where('user_id', $user->id)->first();
            $postjob = new JobPost;
            $postjob->title = $request->job_title;
            $postjob->designation = $request->job_designation;
            // $postjob->salary_type = $request->salary_type;
            $range = str_replace("-", " ", $request->salary_range);
            $sperateRange = explode(" ", $range);
            $postjob->salary_range = $request->salary_range;
            $postjob->min_salary = $sperateRange[0];
            $postjob->max_salary = $sperateRange[1];
            $postjob->shift = $request->shift;
            $postjob->location = $request->location;
            $postjob->experience = $request->experience;
            $postjob->job_type = $request->job_type;
            $postjob->gender = $request->gender;
            $postjob->total_position = $request->total_positions;
            $postjob->description = $request->job_description;
            // $postjob->job_responsibilities = $request->job_responsibilities;
            $postjob->qualification_level = $request->qualification_level;
            // $postjob->benefits = $request->benefits;
            $postjob->status = $request->status;
            $postjob->company_id = $company->id;
            if($request->banner) 
            {   
                $file = $request->banner;
                $imagefilename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $location = 'storage/images/companies/';
                $file->move($location,$imagefilename);
                File::delete($location.$postjob->banner);
                $postjob->banner = $imagefilename;
            }
            $postjob->save();
            $company->post_job_count = $company->post_job_count + 1;
            $company->update();
            return response()->json([
                'success' => true,
                'message' => 'Jobe Posted',
            ]);
        }
    }

    public function UpdatejobPost(Request $request)
    {
        $attributeNames = [
            'job_title' => 'Job Title',
            'job_designation' => 'Job Designation',
            // 'salary_type' => 'Salary Type',
            'salary_range' => 'Salary Range',
            'shift' => 'Shift',
            'experience' => 'Experience',
            'location' => 'Location',
            'job_type' => 'Job Type',
            'gender' => 'Gender',
            'total_positions' => 'Total Positions',
            'job_description' => 'Job Description',
            // 'job_responsibilities' => 'Job Responsibilities',
            'qualification_level' => 'qualification',
            // 'benefits' => 'Benefits',
            'status' => 'Status',
        ];
        $rules = array(
            'job_title' => 'required',
            'job_designation' => 'required',
            // 'salary_type' => 'required',
            'salary_range' => 'required',
            'shift' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'gender' => 'required',
            'total_positions' => 'required',
            'job_description' => 'required',
            // 'job_responsibilities' => 'required',
            'qualification_level' => 'required',
            // 'benefits' => 'required',
            'status' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false,
            ], 200);
        }
        else
        {
            $user = Auth::user();
            $company = Company::where('user_id', $user->id)->first();
            $postjob = JobPost::find($request->id);
            $postjob->title = $request->job_title;
            $postjob->designation = $request->job_designation;
            // $postjob->salary_type = $request->salary_type;
            $range = str_replace("-", " ", $request->salary_range);
            $sperateRange = explode(" ", $range);
            $postjob->salary_range = $request->salary_range;
            $postjob->min_salary = $sperateRange[0];
            $postjob->max_salary = $sperateRange[1];
            $postjob->shift = $request->shift;
            $postjob->location = $request->location;
            $postjob->experience = $request->experience;
            $postjob->job_type = $request->job_type;
            $postjob->gender = $request->gender;
            $postjob->total_position = $request->total_positions;
            $postjob->description = $request->job_description;
            // $postjob->job_responsibilities = $request->job_responsibilities;
            $postjob->qualification_level = $request->qualification_level;
            // $postjob->benefits = $request->benefits;
            $postjob->status = $request->status;
            $postjob->company_id = $company->id;
            if($request->file('banner')) 
            {   
                $file = $request->banner;
                $imagefilename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $location = 'storage/images/companies/';
                $file->move($location,$imagefilename);
                File::delete($location.$postjob->banner);
                $postjob->banner = $imagefilename;
            }
            $postjob->update();
            return response()->json([
                'success' => true,
                'message' => 'Job Updated',
            ]);
        }
    }
    
    public function companyJobs(Request $request)
    {
        $user = Auth::user();
        $company = Company::where('user_id', $user->id)->first();
        $jobs = JobPost::where('company_id', $company->id)->orderBy('created_at', 'desc')->withTrashed()->paginate(2);
        return response()->json($jobs);
    }

    public function deleteJobPost($id)
    {
        if(JobPost::find($id)){
            JobPost::where('id', $id)->delete();
            return response()->json([
                'success' => true
            ]);
        }else{
            return response()->json([
                'success' => false
            ]);
        }
    }

    public function editJobPost($id)
    {
        if(JobPost::find($id)){
            $jobpost = JobPost::find($id);
            return response()->json([
                'success'   => true,
                'data'      => $jobpost,
            ]);
        }else{
            return response()->json([
                'success' => false
            ]);
        }
    }

    public function buyPackage($package_id)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $company = Company::where('user_id', $user_id)->first();
            $package = Package::find($package_id);
            if($order_exist = Order::where('company_id', $company->id)->first()){
                $order_exist->delete();
            }
            $create_Order = Order::create([
                'package_id' => $package->id,
                'company_id' => $company->id,
                'user_id' => Auth::user()->id,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDay($package->duration),
                'status' => 'pending',
            ]);
            $company->package_id = $package->id;
            $company->order_id = $create_Order->id;
            $company->update();

            $pdf = PDF::loadView('pdf.invoice',compact('company'))->setPaper('a4', 'landscape');
            Storage::put('public/pdf/'.$company->company_name.'-invoice.pdf', $pdf->output());
            
            Mail::to($company->email)->send(new SendInvoiceMail($company));
            return response()->json([
                'success' => true,
                'order_id' => $create_Order->id
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'response' => 'login'
            ]);
        }
    }

    public function checkPostJobLimit()
    {
        $user_id = Auth::user()->id;
        $company = Company::where('user_id', $user_id)->with('Order')->first();
        $package = Package::find($company->package_id);
        $order = Order::where('company_id', $company->id)->first();
        if($order){
            if($order->status == 'active')
            {
                if($package->job_post == $company->post_job_count)
                {
                    return response()->json([
                        'success' => false,
                        'limit' => 'exceeded'
                    ]);
                }
                else{
                    return response()->json([
                        'success' => true,
                    ]);
                }
            }else if($company->order['status'] == 'expire'){
                return response()->json([
                    'success' => false,
                    'response' => 'expire'
                ]);
            }
            else
            {
                return response()->json([
                    'success' => false,
                    'response' => 'pending'
                ]);
            }
        }else
            {
                return response()->json([
                    'success' => false,
                    'response' => 'pending'
                ]);
            }
        
    }
    public function downloadInvoice($id)
    {
        $order = Order::find($id);
        $company = Company::where('id', $order->company_id)->first();
        $pdf = PDF::loadView('pdf.invoice',compact('company'))->setPaper('a4', 'landscape');
        return $pdf->download('invoice.pdf');

    }

    public function getAppliedApplicantsList($job_id)
    {
        $candidates = CandidateAppliedJob::where('job_id', $job_id)->with('Candidates')->get();
        return response()->json([
            'candidates' => $candidates,
        ]);
    }

    public function getCompanyWishList()
    {
        $user_id = Auth::user()->id;
        return Company::where('user_id', $user_id)->with(['WishListed', 'WishListed.Candidate'])->first();
    }

    public function addToWishList($candidate_id)
    {
        $user = User::find(Auth::user()->id);
        $company = Company::where('user_id', $user->id)->first();
        $companywishlist = CompanyWishList::create([
            'company_id' => $company->id,
            'candidate_id' => $candidate_id,
        ]);
        if($companywishlist){
            return response()->json([
                'success' => true,
            ]);
        }else{
            return response()->json([
                'success' => false,
            ]);
        }
    }

    public function removeToWishList($id)
    {
        if(CompanyWishList::find($id)->delete()){
            return response()->json([
                'success' => true,
            ]);
        }else{
            return response()->json([
                'success' => false,
            ]);
        }
    }

    public function settingPassword(Request $request)
    {
        $attributeNames = [
            'current_password' => 'Password',
            'new_password' => 'New Password',
            'confirm_password' => 'Confirm Password',
        ];

        $messages = [
            'current_password' => 'Password',
            'new_password' => 'New Password',
            'confirm_password' => 'Confirm Password',
        ];

        $rules = array(
            'current_password'          => 'required|min:6',
            'new_password'          => 'required|min:6',
            'confirm_password'  => 'required|same:new_password',
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false,
            ], 200);
        }
        else
        {
            if(Hash::check($request->current_password, Auth::user()->password)){
                $user = User::find(Auth::user()->id)->update(['password'=> Hash::make($request->new_password)]);
                if($request->active == true){
                    $user = User::find(Auth::user()->id)->update(['status'=> 'Inactive']);
                }
                return response()->json([
                    'message' => true,
                ], 200);
            }else{
                return response()->json([
                    'message' => false,
                ], 200);
            }
        }
        
    }
}
