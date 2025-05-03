<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentAgent extends Model
{
    protected $fillable = [
        'name',
        'location',
        'cnic',
        'primary_email',
        'secondary_email',
        'primary_phone',
        'secondary_phone',
        'file_path',
    ];
}
