<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathCertificateRequest extends Model
{
    use HasFactory;
    protected $table = 'death_registrations';

    protected $fillable = [
        'User_Id',
        'user_name',
        'full_name',
        'sex',
        'date_of_death',
        'date_of_birth',
        'completed_years',
        'months_days',
        'hours_minutes_seconds',
        'place_of_death',
        'civil_status',
        'religion',
        'citizenship',
        'residence',
        'father_name',
        'mother_maiden_name',
        'immediate_cause',
        'antecedent_cause',
        'underlying_cause',
        'other_conditions',
        'maternal_condition',
        'manner_of_death',
        'place_of_occurrence',
        'autopsy',
        'type_of_attendant',
        'attendance_duration',
        'certifying_officer',
        'certification_date',
        'corpse_disposal_method',
        'other_disposal_method_specify',
        'cemetery_or_crematory_name',
        'cemetery_or_crematory_address',  
        'age_of_mother',
        'method_of_delivery',
        'length_of_pregnancy',
        'type_of_birth',
        'multiple_birth_position',
        ];
}
