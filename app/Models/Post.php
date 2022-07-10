<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'body'
    ];

    public function user(){
        return $this->belongsto('App\Models\User');
    }

    public function photos(){
        return $this->morphMany('App\Models\Photo', 'imagable');
    }

    public function tags(){
        return $this->morphedByMany('App\Models\Tag', 'taggable');
    }

    public function videos(){
        return $this->morphedByMany('App\Models\Video', 'taggable');
    }
