<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;
    protected $table = 'home_page_section';
    protected $fillable = [
        'service_headings',
        'care_headings',
        'care_details',
        'phone',
        'years_of_ex',
        'care_photo',
        'care_video',
        'our_mission',
        'our_vision',
        'project_details',
        'health_service_headings',
        'pro_consult_headings',
        'testomonial_details',
        'news_details',
    ];
}
