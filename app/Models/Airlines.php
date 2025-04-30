<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airlines extends Model
{
    protected $table = 'airlines';
    
    protected $fillable = [
        'name',
        'description'
    ];

    public $timestamps = false;
}
