<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';
    protected $fillable = [
        'muncha_id',
        'profile_image',
        'name',
        'email',
        'location',
        'designation',
        'number',
        'blood_group',
        'tax_id',
        'role',
        'documents',
    ];
}
