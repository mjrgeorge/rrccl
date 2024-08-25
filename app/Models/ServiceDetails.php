<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    use HasFactory;
    protected $table = 'service_details';
    protected $fillable = [
        'service_id',
        'big_image',
        'treatment_name',
        'time_duration',
        'doctor_name',
        'quotation',
        'details',
        'short_image_one',
        'short_image_two',
        'short_image_three',
        'second_title',
        'second_details',
        'fst_image_nm',
        'fst_image_dgn',
        'snd_image_nm',
        'snd_image_dgn',
        'trd_image_nm',
        'trd_image_dgn',
    ];
    function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }

}
