<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropdownText extends Model
{
    use HasFactory;
    protected $table = 'dropdown_text';
    protected $fillable = ['title','details'];
}
