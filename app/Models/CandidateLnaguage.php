<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLnaguage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'level',
        'candidate_id',
    ];
}
