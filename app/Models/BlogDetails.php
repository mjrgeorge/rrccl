<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetails extends Model
{
    use HasFactory;
    protected $table = 'blog_details';
    protected $fillable = [
        'blog_id',
        'first_details',
        'second_details',
        'quotation',
        'image',
        'final_details',
        'tag',
        'author',
        'title',
        'author_details',
    ];
    function blog(){
        return $this->belongsTo(Blog::class,'blog_id','id');
    }
}
