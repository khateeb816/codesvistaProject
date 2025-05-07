<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;

class ProtectorRecord extends Model
{
    protected $table = 'protector_records';
    protected $fillable = [
        'candidate_id',
        'protector',
        'date',
        'expenses',
        'notes',
    ];
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
