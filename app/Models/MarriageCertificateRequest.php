<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageCertificateRequest extends Model
{
    use HasFactory;
    protected $table = 'marriage_registrations';

    protected $fillable = [
   'User_Id',
   'user_name',
   'husband_first_name',
   'husband_middle_name',
   'husband_last_name',
   'husband_birthdate',
   'husband_age',
   'husband_city_municipality',
   'husband_province',
   'husband_country',
   'husband_citizenship',
   'husband_residence',
   'husband_religion',
   'husband_father_first_name',
   'husband_father_middle_name',
   'husband_father_last_name',
   'husband_father_citizenship',
   'husband_mother_first_name',
   'husband_mother_middle_name',
   'husband_mother_maiden_last_name',
   'husband_mother_citizenship',
   'wife_first_name',
   'wife_middle_name',
   'wife_last_name',
   'wife_birthdate',
   'wife_age',
   'wife_city_municipality',
   'wife_province',
   'wife_country',
   'wife_citizenship',
   'wife_residence',
   'wife_religion',
   'wife_father_first_name',
   'wife_father_middle_name',
   'wife_father_last_name',
   'wife_father_citizenship',
   'wife_mother_first_name',
   'wife_mother_middle_name',
   'wife_mother_maiden_last_name',
   'wife_mother_citizenship',
   'marriage_date1',
   'marriage_place',
   'officiant_name',
   'officiant_position',
   'witnesses',
    ];
}
