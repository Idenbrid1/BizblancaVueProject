<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'designation',
        'description',
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
        'restrict_applicants',
        'status',
    ];
    protected $casts = [
        'skills' => 'array'
    ];
}
