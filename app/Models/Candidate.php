<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'surname',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'address',
        'city',
        'country',
        'zipcode',
        'profile_image',
        'profile_video',
        'cnic',
        'bio',
        'languages',
        
        'whatsapp',
        'facebook_url',
        'linkedin_url',
        'github_url',
        'twitter_url',

        'is_working_currently',
        'job_start_date',
        'job_end_date',
        'working_experience',
        'current_working_company',
        'current_job',
        'current_salary',
        'current_position',
        'current_status',
        'no_of_persons_managed',
        'skills',
        'is_looking_for_job',
        'looking_for_job_when',
        'looking_for_job_why',
        'looking_for_job_expected_salary',
        'looking_for_job_position',
        'looking_for_job_department',
        'looking_for_job_note',
        'looking_for_job_location',
        'cv_file',
        'cnic_image',
        'experience_letter',
        'profile_image',
        'user_id'
    ];

    public function CandidateAwards()
    {
        return $this->hasMany(CandidateAward::class, 'candidate_id','id') ;
    }
    public function CandidateEducation()
    {
        return $this->hasMany(CandidateEducation::class, 'candidate_id','id');
    }
    public function CandidateExperience()
    {
        return $this->hasMany(CandidateExperience::class, 'candidate_id','id');
    }
    public function CandidateLanguage()
    {
        return $this->hasMany(CandidateLanguage::class, 'candidate_id','id');
    }
    public function Qualification()
    {
        return $this->hasMany(CandidateQualification::class, 'candidate_id','id');
    }
    public function CandidateSkills()
    {
        return $this->hasMany(CandidateSkill::class, 'candidate_id','id');
    }
    public function CandidateProjects()
    {
        return $this->hasMany(CandidateProjects::class, 'candidate_id','id');
    }
    
}
