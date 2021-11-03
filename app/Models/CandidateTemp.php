<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateTemp extends Model
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

        'user_id'
    ];
}
