<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategories extends Model
{
    protected $table = 'job_categories';
    protected $fillable = ['name'];
}
