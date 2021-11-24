<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\CandidateAppliedJob;
use App\Models\CandidateAward;
use App\Models\CandidateEducation;
use App\Models\CandidateExperience;
use App\Models\CandidateLanguage;
use App\Models\CandidateProjects;
use App\Models\CandidateSkill;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Validator;

class CandidateController extends Controller
{
    public function getData()
    {
        $user_id = Auth::user()->id;
        $candidate = Candidate::where('user_id', $user_id)->with(['CandidateAwards', 'CandidateEducation', 'CandidateExperience', 'CandidateLanguage', 'CandidateSkills', 'CandidateProjects'])->first();
        $countries = ["AF|Afghanistan","AL|Albania","DZ|Algeria","AS|American Samoa","AD|Andorra","AO|Angola","AI|Anguilla","AQ|Antarctica","AG|Antigua And Barbuda","AR|Argentina","AM|Armenia","AW|Aruba","AU|Australia","AT|Austria","AZ|Azerbaijan","BS|Bahamas","BH|Bahrain","BD|Bangladesh","BB|Barbados","BY|Belarus","BE|Belgium","BZ|Belize","BJ|Benin","BM|Bermuda","BT|Bhutan","BO|Bolivia","BA|Bosnia And Herzegovina","BW|Botswana","BV|Bouvet Island","BR|Brazil","IO|British Indian Ocean Territory","BN|Brunei Darussalam","BG|Bulgaria","BF|Burkina Faso","BI|Burundi","KH|Cambodia","CM|Cameroon","CA|Canada","CV|Cape Verde","KY|Cayman Islands","CF|Central African Republic","TD|Chad","CL|Chile","CN|China","CX|Christmas Island","CC|Cocos (keeling) Islands","CO|Colombia","KM|Comoros","CG|Congo","CD|Congo, The Democratic Republic Of The","CK|Cook Islands","CR|Costa Rica","CI|Cote D'ivoire","HR|Croatia","CU|Cuba","CY|Cyprus","CZ|Czech Republic","DK|Denmark","DJ|Djibouti","DM|Dominica","DO|Dominican Republic","TP|East Timor","EC|Ecuador","EG|Egypt","SV|El Salvador","GQ|Equatorial Guinea","ER|Eritrea","EE|Estonia","ET|Ethiopia","FK|Falkland Islands (malvinas)","FO|Faroe Islands","FJ|Fiji","FI|Finland","FR|France","GF|French Guiana","PF|French Polynesia","TF|French Southern Territories","GA|Gabon","GM|Gambia","GE|Georgia","DE|Germany","GH|Ghana","GI|Gibraltar","GR|Greece","GL|Greenland","GD|Grenada","GP|Guadeloupe","GU|Guam","GT|Guatemala","GN|Guinea","GW|Guinea-bissau","GY|Guyana","HT|Haiti","HM|Heard Island And Mcdonald Islands","VA|Holy See (vatican City State)","HN|Honduras","HK|Hong Kong","HU|Hungary","IS|Iceland","IN|India","ID|Indonesia","IR|Iran, Islamic Republic Of","IQ|Iraq","IE|Ireland","IL|Israel","IT|Italy","JM|Jamaica","JP|Japan","JO|Jordan","KZ|Kazakstan","KE|Kenya","KI|Kiribati","KP|Korea, Democratic People's Republic Of","KR|Korea, Republic Of","KV|Kosovo","KW|Kuwait","KG|Kyrgyzstan","LA|Lao People's Democratic Republic","LV|Latvia","LB|Lebanon","LS|Lesotho","LR|Liberia","LY|Libyan Arab Jamahiriya","LI|Liechtenstein","LT|Lithuania","LU|Luxembourg","MO|Macau","MK|Macedonia, The Former Yugoslav Republic Of","MG|Madagascar","MW|Malawi","MY|Malaysia","MV|Maldives","ML|Mali","MT|Malta","MH|Marshall Islands","MQ|Martinique","MR|Mauritania","MU|Mauritius","YT|Mayotte","MX|Mexico","FM|Micronesia, Federated States Of","MD|Moldova, Republic Of","MC|Monaco","MN|Mongolia","MS|Montserrat","ME|Montenegro","MA|Morocco","MZ|Mozambique","MM|Myanmar","NA|Namibia","NR|Nauru","NP|Nepal","NL|Netherlands","AN|Netherlands Antilles","NC|New Caledonia","NZ|New Zealand","NI|Nicaragua","NE|Niger","NG|Nigeria","NU|Niue","NF|Norfolk Island","MP|Northern Mariana Islands","NO|Norway","OM|Oman","PK|Pakistan","PW|Palau","PS|Palestinian Territory, Occupied","PA|Panama","PG|Papua New Guinea","PY|Paraguay","PE|Peru","PH|Philippines","PN|Pitcairn","PL|Poland","PT|Portugal","PR|Puerto Rico","QA|Qatar","RE|Reunion","RO|Romania","RU|Russian Federation","RW|Rwanda","SH|Saint Helena","KN|Saint Kitts And Nevis","LC|Saint Lucia","PM|Saint Pierre And Miquelon","VC|Saint Vincent And The Grenadines","WS|Samoa","SM|San Marino","ST|Sao Tome And Principe","SA|Saudi Arabia","SN|Senegal","RS|Serbia","SC|Seychelles","SL|Sierra Leone","SG|Singapore","SK|Slovakia","SI|Slovenia","SB|Solomon Islands","SO|Somalia","ZA|South Africa","GS|South Georgia And The South Sandwich Islands","ES|Spain","LK|Sri Lanka","SD|Sudan","SR|Suriname","SJ|Svalbard And Jan Mayen","SZ|Swaziland","SE|Sweden","CH|Switzerland","SY|Syrian Arab Republic","TW|Taiwan, Province Of China","TJ|Tajikistan","TZ|Tanzania, United Republic Of","TH|Thailand","TG|Togo","TK|Tokelau","TO|Tonga","TT|Trinidad And Tobago","TN|Tunisia","TR|Turkey","TM|Turkmenistan","TC|Turks And Caicos Islands","TV|Tuvalu","UG|Uganda","UA|Ukraine","AE|United Arab Emirates","GB|United Kingdom","US|United States","UM|United States Minor Outlying Islands","UY|Uruguay","UZ|Uzbekistan","VU|Vanuatu","VE|Venezuela","VN|Viet Nam","VG|Virgin Islands, British","VI|Virgin Islands, U.s.","WF|Wallis And Futuna","EH|Western Sahara","YE|Yemen","ZM|Zambia","ZW|Zimbabwe"];
        $universities = ["Abasyn University, Peshawar","Abbottabad University of Science & Technology, Abbottabad","Abdul Wali Khan University, Mardan","Aga Khan University, Karachi","Air University","Al-Hamd Islamic University, Quetta","Bahauddin Zakariya University, Multan","Bahria University","Balochistan University of Engineering & Technology, Khuzdar","Balochistan University of Information Technology, Engineering & Management Sciences, Quetta","Baqai Medical University, Karachi","Barrett Hodgson University,Karachi","Beaconhouse National University, Lahore","Benazir Bhutto Shaheed University Lyari, Karachi","CECOS University of Information Technology & Emerging Sciences, Peshawar","COMSATS Institute of Information Technology","Capital University of Science & Technology, Islamabad","City University of Science & Information Technology, Peshawar","DHA Suffa University, Karachi","DOW University of Health Sciences, Karachi","Dadabhoy Institute of Higher Education, Karachi","Dawood University of Engineering & Technology, Karachi","Fatima Jinnah Medical University, Lahore","Fatima Jinnah Women University, Rawalpindi","Federal Urdu University of Arts, Sciences & Technology, Islamabad","Forman Christian College University, Lahore","Foundation University, Islamabad","GIFT University, Gujranwala","Ghazi University, Dera Ghazi Khan","Ghulam Ishaq Khan Institute of Engineering Sciences & Technology, Swabi","Government College University, Faisalabad","Government College University, Hyderabad","Government College University, Lahore","Government College Women University, Faisalabad","Government College for Women University, Sialkot","Government Sadiq College Women University, Bahawalpur","Greenwich University, Karachi","HITEC University, Taxila","Hajvery University, Lahore","Hamdard University, Karachi","Hazara University, Mansehra","Imperial College of Business Studies, Lahore","Indus University, Karachi","Information Technology University of the Punjab","Institute of Business Administration, Karachi","Institute of Business Management, Karachi","Institute of Management Sciences, Lahore","Institute of Management Sciences, Peshawar","Institute of Space Technology, Islamabad","International Islamic University, Islamabad","Iqra National University, Peshawar","Iqra University, Karachi","Islamia College University, Peshawar","Islamia University, Bahawalpur","Isra University, Hyderabad","Jinnah Sindh Medical University","Jinnah University for Women, Karachi","KASB Institute of Technology, Karachi","Karachi Institute of Economics & Technology, Karachi","Karakurum International University, Gilgit","Khushal Khan Khattak University, Karak","Khwaja Fareed University of Engineering and Information Technology (KFUEIT), Rahim Yar Khan","King Edward Medical University, Lahore","Kinnaird College for Women, Lahore","Kohat University of Science & Technology, Kohat","Lahore College for Women University, Lahore","Lahore Garrison University, Lahore","Lahore Leads University, Lahore","Lahore School of Economics, Lahore","Mehran University of Engineering & Technology, Jamshoro","Minhaj University, Lahore","Mirpur University of Science & Technology, Mirpur","Mohammad Ali Jinnah University, Karachi","Mohi-ud-Din Islamic University, Nerian Sharif","Muhammad Nawaz Shareef University of Agriculture, Multan","Muhammad Nawaz Sharif University of Engineering & Technology, Multan","Muslim Youth University, Islamabad","NED University of Engineering & Technology, Karachi","NFC Institute of Engineering & Technology, Multan","National College of Arts, Lahore","National College of Business Administration & Economics, Lahore","National Defense University, Islamabad","National Textile University, Faisalabad","National University of Computer & Emerging Sciences, Islamabad","National University of Medical Sciences, Rawalpindi","National University of Modern Languages, Islamabad","National University of Sciences & Technology, Islamabad","National University of Technology, Islamabad","Newport Institute of Communications & Economics, Karachi","Northern University, Nowshera","Nur International University, Lahore","Pakistan Institute of Development Economics, Islamabad","Pakistan Institute of Engineering & Applied Sciences, Islamabad","Pakistan Institute of Fashion & Design, Lahore","Peoples University of Medical & Health Sciences for Women, Nawabshah","Pir Mehr Ali Shah Arid Agriculture University, Rawalpindi","Preston University, Kohat","Qarshi University","Quaid-e-Awam University of Engineering, Sciences & Technology, Nawabshah","Quaid-i-Azam University, Islamabad","Rawalpindi Women University","Riphah International University, Islamabad","Sarhad University of Science & Information Technology, Peshawar","Shaheed Benazir Bhutto Dewan University, Karachi","Shaheed Benazir Bhutto University, Shaheed Benazirabad","Shaheed Benazir Bhutto Women University, Peshawar","Shaheed Mohtarma Benazir Bhutto Medical University, Larkana","Shaheed Zulfikar Ali Bhutto Institute of Science & Technology, Karachi","Shifa Tameer-e-Millat University, Islamabad","Sindh Agriculture University, Tandojam","Sindh Madresatul Islam University, Karachi","Sir Syed (CASE) Institute of Technology, Islamabad","Sir Syed University of Engineering & Technology, Karachi","Sukkur IBA University, Sukkur","Textile Institute of Pakistan, Karachi","The Superior College, Lahore","The University of Agriculture Peshawar, Peshawar","The University of Faisalabad, Faisalabad","The University of Lakki Marwat","The Women University, Multan","University of Agriculture, Faisalabad","University of Balochistan, Quetta","University of Baltistan, Skardu","University of Buner","University of Central Punjab, Lahore","University of Chitral","University of Education, Lahore","University of Engineering & Technology, Lahore","University of Engineering & Technology, Mardan","University of Engineering & Technology, Peshawar","University of Engineering & Technology, Taxila","University of FATA, Kohat","University of Gujrat, Gujrat","University of Haripur, Haripur","University of Health Sciences, Lahore","University of Kotli Azad Jammu & Kashmir, Kotli","University of Lahore, Lahore","University of Malakand, Chakdara","University of Management & Technology, Lahore","University of Narowal","University of Okara","University of Peshawar, Peshawar","University of Poonch, Poonch","University of Sahiwal","University of Sargodha, Sargodha","University of Sialkot","University of Sindh, Jamshoro","University of South Asia, Lahore","University of Sufism and Modern Sciences, Bhitshah Sindh","University of Turbat, Turbat","University of Veterinary & Animal Sciences, Lahore","University of Wah, Rawalpindi","University of the Punjab, Lahore","Virtual University of Pakistan, Lahore","Women University Mardan, Mardan","Women University of Azad Jammu & Kashmir, Bagh","Women University, Swabi","Zia-ud-din University,Karachi"];
        $getCandidate = Candidate::where('user_id', $user_id)->first();
        $getSkills = CandidateSkill::where('candidate_id', $getCandidate->id)->first();
        if($getSkills){
            $skill_exist = true;
        }else{
            $skill_exist = false;
        }
        if($candidate){
            return response()->json([
                'candidate' => $candidate,
                'countries' => $countries,
                'universities' => $universities,
                'skill_exist' => $skill_exist,
                
            ]);

        }else{
            return "candidate not exist";
        }
    }

    public function updateBasicInformation(Request $request)
    {
        $attributeNames = [
            // 'profilePhoto' => 'Profile Picture',
            'full_name' => 'Title',
            'gender' => 'Description',
            'address' => 'Photos',
            'date_of_birth' => 'Website',
            'city' => 'Instagram',
            'country' => 'Facebook',
            'cnic' => 'Phone',
            'bio' => 'Email',
            'zipcode' => 'Whatsapp',
        ];
        $rules = array(
            // 'profilePhoto' => 'required',
            'full_name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
            'city' => 'required',
            'country' => 'required',
            'cnic' => 'required',
            'bio' => 'required',
            'zipcode' => 'required',
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
            $candidate = Candidate::where('user_id', $user->id)->first();
            $candidate->full_name = $request->full_name;
            $candidate->gender = $request->gender;
            $candidate->address = $request->address;
            $candidate->date_of_birth = $request->date_of_birth;
            $candidate->city = $request->city;
            $candidate->country = $request->country;
            $candidate->cnic = $request->cnic;
            $candidate->phone = $request->phone_no;
            $candidate->bio = $request->bio;
            $candidate->zipcode = $request->zipcode;
            if($request->file('profilePhoto')) 
            {
                
                $file = $request->file('profilePhoto');
                $imagefilename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $location = 'storage/images/candidates/profile/';
                $file->move($location,$imagefilename);
                File::delete($location.$candidate->profile_image);
                $candidate->profile_image = $imagefilename;
            }
            $candidate->update();
            return response()->json([
                'success' => true,
                'message' => 'Candidate Updated',
            ]);
        }
    }

    public function updateEducation(Request $request)
    {
        $user = Auth::user();
        $candidate = Candidate::where('user_id', $user->id)->first();
        $candidateeducation = CandidateEducation::where('candidate_id', $candidate->id)->delete();
        foreach($request->all() as $education ) {
            $candidateEducation = new CandidateEducation;
            $candidateEducation->school_type = $education['school_type'];
            $candidateEducation->start_date = $education['start_date'];
            $candidateEducation->end_date = $education['end_date'];
            $candidateEducation->school_name = $education['school_name'];
            $candidateEducation->department = $education['department'];
            $candidateEducation->candidate_id = $candidate->id;
            $candidateEducation->save();
        }
        return response()->json([
            'success' => true,
            'message' => 'Candidate Updated',
        ]);
    }

    public function updateLanguage(Request $request)
    {
        $user = Auth::user();
        $candidate = Candidate::where('user_id', $user->id)->first();
        $candidateLanguage = CandidateLanguage::where('candidate_id', $candidate->id)->delete();
        foreach($request->all() as $language) {
            $candidatelanguage = new CandidateLanguage();
            $candidatelanguage->name = $language['name'];
            $candidatelanguage->level = $language['level'];
            $candidatelanguage->candidate_id = $candidate->id;
            $candidatelanguage->save();
        }
        return back();
    }

    public function updateAward(Request $request)
    {
        $user = Auth::user();
        $candidate = Candidate::where('user_id', $user->id)->first();
        $candidateaward = CandidateAward::where('candidate_id', $candidate->id)->delete();
        foreach($request->all() as $award) {
            $candidateaward = new CandidateAward;
            $candidateaward->name = $award['name'];
            $candidateaward->date = $award['date'];
            $candidateaward->candidate_id = $candidate->id;
            $candidateaward->save();
        }
        return back();
    }

    public function updateSkill(Request $request)
    {
        $user = Auth::user();
        $candidate = Candidate::where('user_id', $user->id)->first();
        $candidatekill = CandidateSkill::where('candidate_id', $candidate->id)->delete();
        foreach($request->all() as $skill) {
            $candidatekill = new CandidateSkill;
            $candidatekill->name = $skill['name'];
            $candidatekill->level = $skill['level'];
            $candidatekill->candidate_id = $candidate->id;
            $candidatekill->save();
        }
        return back();
    }

    public function updateCurrentJob(Request $request)
    {
        $user = Auth::user();
        $candidate = Candidate::where('user_id', $user->id)->first();
        if($request->isWorkingCurrently == 0)
        {
            $candidate->current_position = $request->current_position;
            $candidate->current_job = $request->current_position;
            $candidate->current_working_company = $request->current_working_company;
            $candidate->job_start_date = $request->job_start_date;
            $candidate->job_end_date = $request->job_end_date;
            $candidate->current_salary = $request->current_salary;
            $candidate->no_of_persons_managed = $request->no_of_persons_managed;
            $candidate->is_working_currently = $request->isWorkingCurrently;
            $candidate->update();
        }
        else{
            $candidate->current_position = null;
            $candidate->working_experience = null;
            $candidate->job_start_date = null;
            $candidate->job_end_date = null;
            $candidate->current_job = null;
            $candidate->current_salary = null;
            $candidate->current_status = null;
            $candidate->no_of_persons_managed = null;
            $candidate->current_working_company = 0;
            $candidate->is_working_currently = 0;
            $candidate->update();
        }
        return back();
    }

    public function updateExperience(Request $request)
    {
        $user = Auth::user();
        $candidate = Candidate::where('user_id', $user->id)->first();
        $candidateExperience = CandidateExperience::where('candidate_id', $candidate->id)->delete();
        foreach($request->all() as $experience) {
            $candidateexperience = new CandidateExperience();
            $candidateexperience->company_name = $experience['company_name'];
            $candidateexperience->designation = $experience['designation'];
            $candidateexperience->start_date = $experience['start_date'];
            $candidateexperience->end_date = $experience['end_date'];
            $candidateexperience->is_working_currently = $experience['is_working_currently'];
            $candidateexperience->candidate_id = $candidate->id;
            $candidateexperience->save();
        }
        return back();
    }

    public function updateProject(Request $request)
    {
        $user = Auth::user();
        $candidate = Candidate::where('user_id', $user->id)->first();
        $candidateproject = CandidateProjects::where('candidate_id', $candidate->id)->delete();
        foreach($request->all() as $project) {
            $candidateprojects = new CandidateProjects();
            $candidateprojects->name = $project['name'];
            $candidateprojects->link = $project['link'];
            $candidateprojects->start_date = $project['start_date'];
            $candidateprojects->end_date = $project['end_date'];
            $candidateprojects->description = $project['description'];
            $candidateprojects->candidate_id = $candidate->id;
            $candidateprojects->save();
        }
        return back();
    }

    public function updateFileResume(Request $request)
    {
        $data = array();
        $validator = Validator::make($request->all(), [
           'resume' => 'required|mimes:pdf|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                "type" => "error",
            ], 200);
        }
        else{
            if($request->file('resume')) 
            {
                $user = Auth::user();
                $candidate = Candidate::where('user_id', $user->id)->first();

                $file = $request->file('resume');
                $filename = $candidate->id.'-'.$candidate->full_name.'-'.'resume'.'-'.$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $location = 'storage/images/candidates/resume/';
                $file->move($location,$filename);
                $candidate->cv_file = $filename;
                $candidate->update();
                $filepath = url('storage/images/candidates/'.$filename);
                $data['success'] = true;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filename;
            }
        }
        return response()->json($data);
    }

    public function updateFileCnic(Request $request)
    {
        $data = array();
        $validator = Validator::make($request->all(), [
           'uploadcnicfrontback' => 'required|mimes:pdf|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                "type" => "error",
            ], 200);
        }
        else{
            if($request->file('uploadcnicfrontback')) 
            {
                $user = Auth::user();
                $candidate = Candidate::where('user_id', $user->id)->first();

                $file = $request->file('uploadcnicfrontback');
                $filename = $candidate->id.'-'.$candidate->full_name.'-'.'uploadcnicfrontback'.'-'.$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $location = 'storage/images/candidates/cnic/';
                $file->move($location,$filename);
                $candidate->cnic_image = $filename;
                $candidate->update();
                $data['success'] = true;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filename;
            }
        }
        return response()->json($data);
    }

    public function updateExperienceLetterFile(Request $request)
    {
        $data = array();
        $validator = Validator::make($request->all(), [
           'uploadexperienceletter' => 'required|mimes:pdf|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                "type" => "error",
            ], 200);
        }
        else{
            if($request->file('uploadexperienceletter')) 
            {
                $user = Auth::user();
                $candidate = Candidate::where('user_id', $user->id)->first();

                $file = $request->file('uploadexperienceletter');
                $filename = $candidate->id.'-'.$candidate->full_name.'-'.'uploadexperienceletter'.'-'.$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $location = 'storage/images/candidates/experience-letter/';
                $file->move($location,$filename);
                $candidate->experience_letter = $filename;
                $candidate->update();
                $data['success'] = true;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filename;
            }
        }
        return response()->json($data);
    }

    public function updateDesireJob(Request $request)
    {
        $user = Auth::user();
        $candidate = Candidate::where('user_id', $user->id)->first();
        if($request->is_looking_for_job == 1)
        {
            $candidate->is_looking_for_job = $request->is_looking_for_job;
            $candidate->looking_for_job_department = $request->looking_for_job_department;
            $candidate->looking_for_job_expected_salary = $request->looking_for_job_expected_salary;
            $candidate->looking_for_job_location = $request->looking_for_job_location;
            $candidate->looking_for_job_position = $request->looking_for_job_position;
            $candidate->looking_for_job_when = $request->looking_for_job_when;
            // $candidate->looking_for_job_why = $request->looking_for_job_why;
            // $candidate->looking_for_job_note = $request->looking_for_job_note;
            $candidate->update();
            return back();
        }
        else{
            $candidate->is_looking_for_job = 0;
            $candidate->looking_for_job_when = null;
            // $candidate->looking_for_job_why = null;
            $candidate->looking_for_job_expected_salary = null;
            $candidate->looking_for_job_position = null;
            $candidate->looking_for_job_department = null;
            // $candidate->looking_for_job_note = null;
            $candidate->looking_for_job_location = null;
            $candidate->update();
            return back();

        }
    }

    public function applyJob($job_id)
    {
        if($job_post = JobPost::where(['id' => $job_id, 'status' => 'Active'])->first()){
            // $apply_candidate = new CandidateAppliedJob();
            // $apply_candidate->job_id = $job_post->id;
            // $apply_candidate->company_id = $job_post->company_id;
            // $apply_candidate->user_id = Auth::user()->id;
            // $apply_candidate->create();
            CandidateAppliedJob::create([
                'job_id' => $job_post->id,
                'company_id' => $job_post->company_id,
                'user_id' => Auth::user()->id
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Applied SuccessfullyD',
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'notfound',
            ]);
        }
    }

    public function checkAlreadyApplied($id)
    {
        if(CandidateAppliedJob::where(['user_id'=> Auth::user()->id, 'job_id' => $id])->first()){
            return response()->json([
                'already_applied'   => true,
            ]); 
        }else{
            return response()->json([
                'already_applied'   => false,
            ]); 
        }
    }
}
