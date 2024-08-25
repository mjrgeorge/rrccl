<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosts extends Model
{
    use HasFactory;
    protected $table = 'job_post';
    protected $fillable = ['title','details','last_date'];
}
