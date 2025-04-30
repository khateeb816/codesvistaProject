<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationCategories extends Model
{
    protected $table = 'education_categories';
    
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}
