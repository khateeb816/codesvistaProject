<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable = [
        'candidate_id',
        'medical_center',
        'status',
        'notes'
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
