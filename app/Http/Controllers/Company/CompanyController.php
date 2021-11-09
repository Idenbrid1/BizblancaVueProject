<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class CompanyController extends Controller
{
    public function getCompanyProfile()
    {
        $user_id = Auth::user()->id;
        $company = Company::where('user_id', $user_id)->first();
        return response()->json([
            'company' => $company,
        ]);
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
        // return $request;
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
}
