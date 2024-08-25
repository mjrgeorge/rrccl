<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
    protected $table = 'general';
    protected $fillable =[
        'logo',
        'email',
        'address',
        'phone',
        'footer_text',
        'copy_right_text',
        'marquee_text',
        'contact_title',
        'contact_details',
        'map',
        'copy_right'
    ];
}
