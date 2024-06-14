<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Craftman extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'craftman';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'image',
        'password',
        'fee',
        'category',
        'experience',
        'pincode',
        'subdistic',
        'distic',
        'description'
    ];
}
