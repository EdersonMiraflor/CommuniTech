<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageCertificateRequest extends Model
{
    use HasFactory;
    protected $table = 'marriage_registrations';

    protected $fillable = [
        'bride_full_name',
        'bride_place_of_birth',
        'bride_date_of_birth',
        'bride_residence',
        'groom_full_name',
        'groom_place_of_birth',
        'groom_date_of_birth',
        'groom_residence',
        'date_of_marriage',
        'place_of_marriage',
        'officiant_name',
    ];
}
