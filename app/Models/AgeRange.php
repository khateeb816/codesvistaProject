<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgeRange extends Model
{
    protected $table = 'age_ranges';
    
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}
