<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseRecord extends Model
{
    protected $table = 'expense_records';

    protected $fillable = [
        'candidate_id',
        'amount',
        'description',
        'date',
        'expense_type',
        'payment_method',
        'reference_number',
    ];

    /**
     * Get the candidate that owns the expense record.
     */
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
