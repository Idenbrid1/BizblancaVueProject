<?php
namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\CandidateSkill;
use App\Models\CandidateWishList;
use App\Models\Company;
use App\Models\CompanyWishList;
use App\Models\ContactUs;
use App\Models\JobPost;
use App\Models\News;
use App\Models\NewsLetter;
use App\Models\User;
use App\Models\Order;
use App\Models\Package;
use App\Models\Pakage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Validator;
use Auth;
class CommonController extends Controller
{
    public function jobSearch(Request $request)
    { 
        if($request->title)
        {
            $jobposts = JobPost::query()->where('title', 'LIKE', "%{$request->title}%")->with('Company')->get();
            $jobposts = $jobposts->where('status', 'Active');
        }
        else{
            $jobposts = JobPost::where('status', 'Active')->with('Company')->get();
        }
        $fields = ['experience', 'job_type', 'qualification_level', 'salary_range', 'shift', 'gender'];
        foreach($fields as $field){
            if(!empty($request->$field)){
                $jobposts = $jobposts->where($field, $request->$field);
            }
        }
        foreach($jobposts as $jp){
            $final_arr[] = $jp;
        }
        if($jobposts)
        {
            return response()->json([
                'jobposts'  => $final_arr,
                'count'     => count($final_arr),
            ]);
        }
        else{
            return JobPost::with('Company')->random();
        }
    }
    public function jobKeywordSearch($keyword)
    {
        return JobPost::query()->with(['Company'])
            ->where('title', 'LIKE', "%{$keyword}%") 
            ->orWhere('designation', 'LIKE', "%{$keyword}%") 
            ->get();
    }
    public function candidateKeywordSearch($keyword)
    {
        $candidates = Candidate::query()->with(['CandidateSkills'])
                                        ->where('full_name', 'LIKE', "%{$keyword}%")
                                        ->get();
        $user = User::find(Auth::user()->id);
        $company = Company::where('user_id', $user->id)->first();
        $candidate_with_wishlist = [];
        foreach($candidates as $candidate)
        {
            if(CompanyWishList::where(['company_id'=>$company->id, 'candidate_id'=>$candidate->id])->first())
            {
                $candidate_with_wishlist[] = array(
                    'candidate'=>$candidate,
                    'is_wish_listed'=>true,
                );
            }else{
                $candidate_with_wishlist[] = array(
                    'candidate'=>$candidate,
                    'is_wish_listed'=>false,
                );
            }
        }
        return $candidate_with_wishlist;
    }
    public function companyKeywordSearch($keyword)
    {
        $companies = Company::query()
            ->where('company_name', 'LIKE', "%{$keyword}%") 
            ->get();
        $user = User::find(Auth::user()->id);
        $candidate = Candidate::where('user_id', $user->id)->first();
        $company_with_wishlist = [];
        foreach($companies as $company)
        {
            if(CandidateWishList::where(['company_id'=>$company->id, 'candidate_id'=>$candidate->id])->first())
            {
                $company_with_wishlist[] = array(
                    'company'=>$company,
                    'is_wish_listed'=>true,
                );
            }else{
                $company_with_wishlist[] = array(
                    'company'=>$company,
                    'is_wish_listed'=>false,
                );
            }
        }
        return $company_with_wishlist;
    }
    public function candidateSearch(Request $request)
    { 
        if($request->skills)
        {
            foreach($request->skills as $skill)
            {
                $skills_array[] =  $skill['name'];
            }
            $candidate_skills_lists = CandidateSkill::whereIn('name', $skills_array)->get();
            $final_skills_array = [];
            foreach($candidate_skills_lists as $break_skill)
            {
                $final_skills_array[] =  $break_skill->candidate_id;
            }
            if(count($final_skills_array) > 0){
                $candidate_skills_lists = Candidate::whereIn('id', $final_skills_array)->with('CandidateSkills')->get();
            }
        }
        else{ 
            $candidate_skills_lists = Candidate::with('CandidateSkills')->get();
        }
        $fields = ['working_experience', 'city', 'gender'];
        foreach($fields as $field){
            if($request->$field){
                $candidate_skills_lists = $candidate_skills_lists->where($field, $request->$field);
            }
        }
        if(count($candidate_skills_lists) > 0)
        {
            // return $candidate_skills_lists;
            $user = User::find(Auth::user()->id);
            $company = Company::where('user_id', $user->id)->first();
            // $candidates = Candidate::get();
            foreach($candidate_skills_lists as $key=>$candidate)
            {
                if(CompanyWishList::where(['company_id'=>$company->id, 'candidate_id'=>$candidate->id])->first())
                {
                    $candidate_with_wishlist[$key] = array(
                        'candidate'=>$candidate,
                        'is_wish_listed'=>true,
                    );
                }else{
                    $candidate_with_wishlist[$key] = array(
                        'candidate'=>$candidate,
                        'is_wish_listed'=>false,
                    );
                }
            }
            return $candidate_with_wishlist;
        }
        else{
            $user = User::find(Auth::user()->id);
            $company = Company::where('user_id', $user->id)->first();
            $candidates = Candidate::get();
            foreach($candidates as $candidate)
            {
                if(CompanyWishList::where(['company_id'=>$company->id, 'candidate_id'=>$candidate->id])->first())
                {
                    $candidate_with_wishlist[] = array(
                        'candidate'=>$candidate,
                        'is_wish_listed'=>true,
                    );
                }else{
                    $candidate_with_wishlist[] = array(
                        'candidate'=>$candidate,
                        'is_wish_listed'=>false,
                    );
                }
            }
            return $candidate_with_wishlist;
        }
    }
    public function getCandidateSearch()
    {
        return Candidate::with('CandidateSkills')->latest()->paginate(12); 
    }
    public function getCompanyDetail($id)
    {
        return Company::with('Jobs')->find($id);
    }
    
    public function getJobDetail($id)
    {
        $job = JobPost::with('Company')->find($id);
        $retatedCompanyJob = JobPost::where('company_id', $job->id)->with('Company')->get();
        if(isset($retatedCompanyJob))
        {
            $retatedCompanyJob = JobPost::with('Company')->orderBy('created_at', 'desc')->get();
        }
        return response()->json([
            'job' => $job,
            'related_job' => $retatedCompanyJob
        ]);
    }
    public function getCandidateDetail($id)
    {
        $candidate = Candidate::with(['CandidateAwards', 'CandidateEducation', 'CandidateExperience', 'CandidateLanguage', 'CandidateSkills', 'CandidateProjects'])->find($id);
        $retatedCandidate = Candidate::with(['CandidateAwards', 'CandidateEducation', 'CandidateExperience', 'CandidateLanguage', 'CandidateSkills', 'CandidateProjects'])->inRandomOrder()->get();
        return response()->json([
            'job' => $candidate,
            'related_candidate' => $retatedCandidate
        ]);
    }
    public function getPackagePlansList()
    {
        return Package::all();
    }
    public function expireTodayJobs()
    {
        // $fetchList = Order::where('status', 'active')->toSql();
        // $todaydate = Carbon::now();
        // return DB::select("SELECT * FROM `orders` WHERE  `end_date` = '$todaydate'");
    }
    public function contactUs(Request $request)
    {
        $attributeNames = [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
        ];
        $messages = [
            // 'text.unique_with' => 'This Company Already Exist!',
        ];
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
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
            $contact_us = ContactUs::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);
            if($contact_us){
                return response()->json([
                    'success' => true,
                ]);
            }else{
                return response()->json([
                    'success' => false,
                ]);
            }
        }
    }

    public function getNews()
    {
        return News::where('status', 'Approved')->get();
    }

    public function newsLetter(Request $request)
    {
        $attributeNames = [
            'email' => 'Email',
        ];
        $messages = [
            // 'text.unique_with' => 'This Company Already Exist!',
        ];
        $rules = [
            'email' => 'required|email',
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
            $news_letter = NewsLetter::create([
                'email' => $request->email,
            ]);
            if($news_letter){
                return response()->json([
                    'success' => true,
                ]);
            }else{
                return response()->json([
                    'success' => false,
                ]);
            }
        }
    }
}