<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'address',
        'city',
        'phone',
        'email',
        'ceo',
        'web_link',
        'establish_at',
        'no_of_employees',
        'industry',
        'description',
        'logo',
        'profile_gallery',
        'profile_video',
        'whatsapp',
        'facebook',
        'linkedin',
        'twitter',
        'github',
        'user_id',
    ];
}
