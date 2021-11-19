<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateSkill;
use App\Models\Company;
use App\Models\JobPost;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function jobSearch(Request $request)
    {
        // https://titanwolf.org/Network/Articles/Article?AID=adeca128-52e3-4859-bc75-489b06bed0d1#gsc.tab=0 FOR VIDEO
        if($request->gender)
        {
            if($request->gender == 'All')
            {
                $jobposts = JobPost::where('status', 'Active')->with('Company')->get();
            }
            else{
                $jobposts = JobPost::where('gender', $request->gender)->with('Company')->get();
            }
        }
        else{
            $jobposts = JobPost::where('status', 'Active')->with('Company')->get();
        }
        $fields = ['experience', 'job_type', 'qualification_level', 'salary_range', 'shift'];
        foreach($fields as $field){
            if(!empty($request->$field)){
                $jobposts = $jobposts->where($field, $request->$field);
            }
        }
        if($jobposts)
        {
            return $jobposts;
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
    public function companyKeywordSearch($keyword)
    {
        return Company::query()
            ->where('company_name', 'LIKE', "%{$keyword}%") 
            ->get();
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
            foreach($candidate_skills_lists as $break_skill)
            {
                $final_skills_array[] =  $break_skill->candidate_id;
            }
            $candidate_skills_lists = Candidate::whereIn('id', $final_skills_array)->get();
                
            }
        else{
            $candidate_skills_lists = Candidate::all();
        }
        $fields = ['working_experience', 'city', 'gender'];
        foreach($fields as $field){
            if(!empty($request->$field)){
                $candidate_skills_lists = $candidate_skills_lists->where($field, $request->$field);
            }
        }
        return $candidate_skills_lists;
        if($candidate_skills_lists)
        {
            return $candidate_skills_lists;
        }
        else{
            return Candidate::random();
        }
    }

    public function getCandidateSearch()
    {
        return Candidate::latest()->paginate(12); 
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
}
