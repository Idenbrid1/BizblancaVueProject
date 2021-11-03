<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProjects extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'start_date',
        'end_date',
        'description',
        'candidate_id',
    ];
}
