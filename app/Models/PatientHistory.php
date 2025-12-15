<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientHistory extends Model
{
    protected $fillable = [
        'user_id',
        'patient_name',
        'visit_date',
        'service',
        'status',
    ];
}
