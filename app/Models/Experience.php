<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company',
        'main_category',
        'sub_category',
        'working_category',
        'from_year',
        'to_year',
        'sector',
        'type',
        'candidate_id'
    ];

    /**
     * Get the candidate that owns the experience.
     */
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
