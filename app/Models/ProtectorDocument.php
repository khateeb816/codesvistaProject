<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProtectorDocument extends Model
{
    protected $table = 'protector_documents';

    protected $fillable = [
        'candidate_id',
        'bc_form',
        'national_bank_slip',
        'insurance_paper',
        'passport_id_card',
        'ptn_form',
        'bank_details',
        'diary_form',
    ];
}
