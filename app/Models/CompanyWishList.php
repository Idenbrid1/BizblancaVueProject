<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyWishList extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'company_id',
    ];

    public function Candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id')->with('CandidateSkills');
    }
}
