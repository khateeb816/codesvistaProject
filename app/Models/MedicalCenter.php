<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalCenter extends Model
{
    protected $table = 'medical_centers';
    protected $fillable = [
        'city',
        'name',
        'phone',
        'contact_person',
        'email',
        'fax',
        'location',
        'address',
    ];
}
