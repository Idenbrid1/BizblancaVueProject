<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateWishList extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'candidate_id',
    ];

    public function Company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
