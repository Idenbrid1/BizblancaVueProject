<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateExperience extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'designation',
        'overview',
        'start_date',
        'end_date',
        'is_working_currently',
        'candidate_id',
    ];
}
