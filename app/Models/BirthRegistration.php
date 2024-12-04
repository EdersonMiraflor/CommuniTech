<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthRegistration extends Model
{
    use HasFactory;

    // Specify the fields that are mass-assignable
    protected $fillable = [
        'child_first_name',
        'child_middle_name',
        'child_last_name',
        'child_sex',
        'child_date_of_birth',
        'child_place_of_birth',
        
        'mother_first_name',
        'mother_middle_name',
        'mother_last_name',
        'mother_date_of_birth',
        'mother_citizenship',
        'mother_religion',
        'mother_occupation',
        'mother_residence',
        
        'father_first_name',
        'father_middle_name',
        'father_last_name',
        'father_date_of_birth',
        'father_citizenship',
        'father_religion',
        'father_occupation',
        'father_residence',
        
        'informant_name',
        'informant_relationship_to_child',
        'informant_address',
        'informant_date_signed',
        
        'attendant_name',
        'attendant_title',
        'attendant_address',
        'attendant_date_signed',
    ];}
