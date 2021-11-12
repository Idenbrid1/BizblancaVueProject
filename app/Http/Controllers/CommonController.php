<?php

namespace App\Http\Controllers;

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
}
