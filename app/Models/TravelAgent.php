<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelAgent extends Model
{
    protected $table = 'traval_agents';
    protected $fillable = [
        'code',
        'name',
        'location',
        'arlines_deals_with',
        'secondary_email',
        'secondary_phone',
        'primary_email',
        'primary_phone',
        'address',
        'file_path',
    ];
}
