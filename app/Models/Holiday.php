<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;
    protected $table = 'holidays';
    protected $fillable = [
        'holiday_name',
        'start_date',
        'end_date',
        'total_days',
        'status',
    ];
}
