<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateQualification extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_type',
        'start_date',
        'end_date',
        'school_name',
        'department',
        'candidate_id',
    ];
}
