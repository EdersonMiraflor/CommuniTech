<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthCertificateRequest extends Model
{
    use HasFactory;

    protected $table = 'birth_registrations';

    protected $fillable = [
        'User_Id',
        'user_name',
        'child_first',
        'child_middle',
        'child_last',
        'child_sex',
        'child_birthdate',
        'child_birthplace',
        'multiple_birth',   
        'birth_type',
        'birth_order',
        'birth_weight',
        'mother_first_name',
        'mother_middle_name',
        'mother_last_name',
        'citizenship',
        'religion',
        'total_number',
        'children',
        'dead_child',
        'occupation',
        'mother_age',
        'mother_street',
        'mother_street_input',
        'mother_city',
        'mother_province',
        'mother_country',
        'father_first_name',
        'father_middle_name',
        'father_last_name',
        'citizenship2',
        'religion2',
        'occupation2',
        'father_age',
        'father_street',
        'father_street_input',
        'father_city',
        'father_province',
        'father_country',
        'marriage_date',
        'marriage_street',
        'marriage_street_input',
        'marriage_municipality',
        'marriage_province',
        'marriage_country',
        'attendant_role',
        'other_attendant_role',
    ];
}
