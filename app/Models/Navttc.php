<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navttc extends Model
{
    protected $fillable = [
        'candidate_id',
        'center_name',
        'course',
        'status',
        'start_date',
        'end_date',
        'notes'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
