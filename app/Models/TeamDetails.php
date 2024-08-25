<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamDetails extends Model
{
    use HasFactory;
    protected $table ='team_details';
    protected $fillable = [
        'team_id',
        'degree',
        'quotation',
        'details',
        'areas_of_expertise',
        'office',
        'university',
        'time_schedule',
        'image',
    ];
    function team(){
        return $this->belongsTo(Team::class,'team_id','id');
    }
}
