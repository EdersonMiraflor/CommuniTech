<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthRegistration extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'birth_registrations';

    // Allow mass assignment for the specified fields
    protected $fillable = [
        'child_first_name',
        'child_middle_name',
        'child_last_name',
        'child_sex',
        'child_dob',
        'child_place_of_birth',
        'mother_first_name',
        'mother_middle_name',
        'mother_last_name',
        'mother_dob',
        'mother_citizenship',
        'mother_religion',
        'mother_occupation',
        'mother_residence',
        'father_first_name',
        'father_middle_name',
        'father_last_name',
        'father_dob',
        'father_citizenship',
        'father_religion',
        'father_occupation',
        'father_residence',
        'informant_name',
        'informant_relationship',
        'informant_address',
        'informant_date_signed',
        'attendant_name',
        'attendant_title',
        'attendant_address',
        'attendant_date_signed',
    ];

    // Add any additional configurations like hidden attributes, dates, etc., if needed
}
