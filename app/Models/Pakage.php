<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakage extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'amount',
        'image',
        'job_post',
        'connect',
        'is_personal_show',
        'duration',
        'description',
    ];
}
