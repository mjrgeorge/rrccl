<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'service_id',
        'doctor'
    ];
    function appointment(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
