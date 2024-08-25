<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $fillable = [
        'name',
        'expertise',
        'details',
        'phone',
        'email',
        'facebook',
        'twitter',
        'linkedin',
        'image',
    ];
    function team(){
        return $this->hasMany(Team::class,'id','team_id');
    }
}
