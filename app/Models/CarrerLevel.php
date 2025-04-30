<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarrerLevel extends Model
{
    protected $table = 'carrer_levels';
    
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}
