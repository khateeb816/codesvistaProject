<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCandidate extends Model
{
    protected $fillable = ['candidate_id', 'title', 'company', 'location', 'status'];

}
