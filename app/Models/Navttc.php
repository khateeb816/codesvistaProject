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
        'notes',
        'mobile_number',
        'occupation_name_arabic',
        'occupation_name_english',
        'occupation_code',
        'test_center_city',
        'test_date',
        'expected_result_date',
        'result_status'
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
