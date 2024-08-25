<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'title',
        'details',
        'image',
        'date',
    ];
    function news(){
        return $this->hasMany(NewsDetails::class,'id','news_id');
    }
}
