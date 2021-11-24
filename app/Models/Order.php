<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'pakage_id',
        'user_id',
        'start_date',
        'end_date',
        'status',
    ];
}
