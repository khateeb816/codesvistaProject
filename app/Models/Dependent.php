<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    protected $fillable = [
        'type',
        'gender',
        'age',
        'name',
        'relation',
        'candidate_id'
    ];

    /**
     * Get the candidate that owns the dependent.
     */
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
