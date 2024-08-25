<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitingHours extends Model
{
    use HasFactory;
    protected $table= 'visiting_hours';
    protected $fillable = ['day','time'];
}
