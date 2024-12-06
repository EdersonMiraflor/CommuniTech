<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathCertificateRequest extends Model
{
    use HasFactory;
    protected $table = 'death_registrations';

    protected $fillable = [
        'deceased_name',
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
        ];
}
