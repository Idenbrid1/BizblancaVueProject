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

    public function Jobs()
    {
        return $this->hasMany(JobPost::class, 'company_id','id') ;
    }

    public function Package()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }

    public function Order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function WishListed()
    {
        return $this->hasMany(CompanyWishList::class, 'company_id', 'id');
    }
}
