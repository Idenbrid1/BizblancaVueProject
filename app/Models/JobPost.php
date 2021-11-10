<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'bannar',
        'title',
        'designation',
        'job_description',
        'skills',
        'job_type',
        'shift',
        'industry',
        'department',
        'career_level',
        'experience',
        'salary_type',
        'min_salary',
        'max_salary',
        'salary_range',
        'specific_gender_required',
        'total_position',
        'hired_position',
        'remaining_position',
        'applied_by',
        'qualification_level',
        'major_subject',
        'degree_title',
        'salary_visibilty',
        'age',
        'benefits',
        'job_responsibilities',
        'restrict_applicants',
        'status',
    ];
    protected $casts = [
        'skills' => 'array'
    ];
}
