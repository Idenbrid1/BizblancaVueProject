<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateAppliedJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'company_id',
        'candidate_id',
    ];
    public function Candidates()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id','id');
    }
}
