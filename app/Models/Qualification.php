<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
        'duration',
        'degree',
        'institute',
        'candidate_id'
    ];

    /**
     * Get the candidate that owns the qualification.
     */
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
