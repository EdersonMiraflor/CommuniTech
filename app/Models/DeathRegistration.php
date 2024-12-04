<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathRegistration extends Model
{
    use HasFactory;

    // Add the fields that can be mass-assigned (fillable)
    protected $fillable = [
        'deceased_first_name',
        'deceased_middle_name',
        'deceased_last_name',
        'deceased_suffix',
        'deceased_sex',
        'deceased_dob',
        'deceased_birthplace',
        'death_date',
        'death_time',
        'death_place',
        'cause_of_death',
        'informant_name',
        'informant_relationship',
        'informant_address',
        'informant_date_signed'
    ];
}
