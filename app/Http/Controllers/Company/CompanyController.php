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
use Carbon\Carbon;
use Mail;


class CompanyController extends Controller
{
    public function getCompanyProfile()
    {
        $user_id = Auth::user()->id;
        $company = Company::where('user_id', $user_id)->with(['Order', 'Package'])->first();
        if($company->order['status'] == 'active')
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
        else
        {
            return response()->json([
                'company' => $company,
                'response' => 'pending'
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
        }
        $company->profile_gallery = implode(',', $galleryfilenamearray);
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
            'bannar' => 'bannar',
            'job_title' => 'Job Title',
            'job_designation' => 'Job Designation',
            'salary_type' => 'Salary Type',
            'salary_range' => 'Salary Range',
            'shift' => 'Shift',
            'experience' => 'Experience',
            'location' => 'Location',
            'job_type' => 'Job Type',
            'gender' => 'Gender',
            'total_positions' => 'Total Positions',
            'job_description' => 'Job Description',
            'job_responsibilities' => 'Job Responsibilities',
            'qualification_level' => 'qualification',
            'benefits' => 'Benefits',
        ];
        $rules = array(
            'bannar' => 'required',
            'job_title' => 'required',
            'job_designation' => 'required',
            'salary_type' => 'required',
            'salary_range' => 'required',
            'shift' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'gender' => 'required',
            'total_positions' => 'required',
            'job_description' => 'required',
            'job_responsibilities' => 'required',
            'qualification_level' => 'required',
            'benefits' => 'required',
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
            $postjob->salary_type = $request->salary_type;
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
            $postjob->job_responsibilities = $request->job_responsibilities;
            $postjob->qualification_level = $request->qualification_level;
            $postjob->benefits = $request->benefits;
            $postjob->company_id = $company->id;
            if($request->bannar) 
            {   
                $file = $request->bannar;
                $imagefilename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $location = 'storage/images/companies/';
                $file->move($location,$imagefilename);
                File::delete($location.$postjob->bannar);
                $postjob->bannar = $imagefilename;
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
    
    public function companyJobs(Request $request)
    {
        $user = Auth::user();
        $company = Company::where('user_id', $user->id)->first();
        $jobs = JobPost::where('company_id', $company->id)->orderBy('created_at', 'desc')->paginate(2);
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
            Mail::to($company->email)->send(new SendInvoiceMail($company));
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
        if($company->order['status'] == 'active')
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
    }
}
