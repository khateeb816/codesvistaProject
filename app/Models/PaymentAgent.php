<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentAgent extends Model
{
    protected $fillable = [
        'name',
        'location',
        'passport_no',
        'cnic',
        'primary_phone',
        'secondary_phone',
        'primary_email',
        'secondary_email',
        'file_path',
    ];
}
