<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'description',
        'image',
        'created_by',
        'updated_by',
        'status',
    ];

    public function createdBy(){
        return $this->hasOne(Admin::class, 'id', 'created_by');
    }

    public function updatedBy(){
        return $this->hasOne(Admin::class, 'id', 'updated_by');
    }
}
