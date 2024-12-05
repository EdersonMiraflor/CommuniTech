<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthCertificateRequest extends Model
{
    use HasFactory;

    protected $table = 'birth_registrations';

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
    ];
}
