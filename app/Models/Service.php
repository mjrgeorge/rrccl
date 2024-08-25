<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'title',
        'image',
        'details',
        'icon',
        'status',
    ];
    function service(){
        return $this->hasMany(ServiceDetails::class,'id','service_id');
    }
    function appointment(){
        return $this->hasMany(Appointment::class,'id','service_id');
    }
}
