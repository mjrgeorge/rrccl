<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsDetails extends Model
{
    use HasFactory;
    protected $table = 'news_details';
    protected $fillable = [
        'news_id',
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
    function news(){
        return $this->belongsTo(News::class,'news_id','id');
    }
}
