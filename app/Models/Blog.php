<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'details',
        'image',
        'date',
    ];
    function blog(){
        return $this->hasMany(BlogDetails::class,'id','blog_id');
    }
}
