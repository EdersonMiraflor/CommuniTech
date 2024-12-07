<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;
use App\Models\MarriageCertificateRequest;
use App\Models\DeathCertificateRequest;

class CertificateRequestController extends Controller
{

/*Live Birth*/
     /*Start Live Birth*/
    public function birthcreate()
    {
        return view('page.form102');
    }

    public function birthstore(Request $request)
    {
        BirthCertificateRequest::create([
            'child_first' => $request->child_first,
            'child_middle' => $request->child_middle,
            'child_last' => $request->child_last,
            'child_sex' => $request->child_sex,
            'child_birthdate' => $request->child_birthdate,
            'child_birthplace' => $request->child_birthplace,
            'multiple_birth' => $request->multiple_birth,
            'birth_type' => $request->birth_type,
            'birth_order' => $request->birth_order,
            'birth_weight' => $request->birth_weight,
            'mother_first_name' => $request->mother_first_name,
            'mother_middle_name' => $request->mother_middle_name,
            'mother_last_name' => $request->mother_last_name,
            'citizenship' => $request->citizenship,
            'religion' => $request->religion,
            'total_number' => $request->total_number,
            'children' => $request->children,
            'dead_child' => $request->dead_child,
            'occupation' => $request->occupation,
            'mother_age' => $request->mother_age,
            'mother_street' => $request->mother_street,
            'mother_city' => $request->mother_city,
            'mother_province' => $request->mother_province,
            'mother_country' => $request->mother_country,
            'father_first_name' => $request->father_first_name,
            'father_middle_name' => $request->father_middle_name,
            'father_last_name' => $request->father_last_name,
            'citizenship2' => $request->citizenship2,
            'religion2' => $request->religion2,
            'occupation2' => $request->occupation2,
            'father_age' => $request->father_age,
            'father_street' => $request->father_street,
            'father_city' => $request->father_city,
            'father_province' => $request->father_province,
            'father_country' => $request->father_country,
            'marriage_date' => $request->marriage_date,
            'marriage_street' => $request->marriage_street,
            'marriage_municipality' => $request->marriage_municipality,
            'marriage_province' => $request->marriage_province,
            'marriage_country' => $request->marriage_country,
            'attendant_role' => $request->attendant_role,
            'other_attendant_role' => $request->other_attendant_role,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'name_child' => $request->name_child,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'signature1' => $request->signature1,
            'signature2' => $request->signature2,
        ]);

        return redirect('/home/services/form102/birthform');
    }
/*End Live Birth*/
 
/*Marriage*/
    /*Start Marriage*/
    public function marriagecreate()
    {
        return view('page.marriage');
    }

    public function marriagestore(Request $request)
    {
        MarriageCertificateRequest::create([
            'bride_full_name' => $request->bride_name,
            'bride_place_of_birth' => $request->bride_birthplace,
            'bride_date_of_birth' => $request->bride_birthdate,
            'bride_residence' => $request->bride_residence,
            'groom_full_name' => $request->groom_name,
            'groom_place_of_birth' => $request->groom_birthplace,
            'groom_date_of_birth' => $request->groom_birthdate,
            'groom_residence' => $request->groom_residence,
            'date_of_marriage' => $request->marriage_date,
            'place_of_marriage' => $request->marriage_place,
            'officiant_name' => $request->officiant_name,
        ]);

        return redirect('/home/services/marriageform/birthform');
    }
/*End Marriage*/   

/*Death*/
    /*Start Death*/
    public function deathcreate()
    {
        return view('page.deathform');
    }

    public function deathstore(Request $request)
    {
        // Store the data directly in the database
        DeathCertificateRequest::create([
            'full_name' => $request->full_name,
            'sex' => $request->sex,
            'date_of_death' => $request->date_of_death,
            'date_of_birth' => $request->date_of_birth,
            'completed_years' => $request->completed_years,
            'months_days' => $request->months_days,
            'hours_minutes_seconds' => $request->hours_minutes_seconds,
            'place_of_death' => $request->place_of_death,
            'civil_status' => $request->civil_status,
            'religion' => $request->religion,
            'citizenship' => $request->citizenship,
            'residence' => $request->residence,
            'father_name' => $request->father_name,
            'mother_maiden_name' => $request->mother_maiden_name,
            'immediate_cause' => $request->immediate_cause,
            'antecedent_cause' => $request->antecedent_cause,
            'underlying_cause' => $request->underlying_cause,
            'other_conditions' => $request->other_conditions,
            'maternal_condition' => $request->maternal_condition,
            'manner_of_death' => $request->manner_of_death,
            'place_of_occurrence' => $request->place_of_occurrence,
            'autopsy' => $request->autopsy,
             'type_of_attendant' => $request->type_of_attendant,
             'attendance_duration' => $request->attendance_duration,
             'certifying_officer' => $request->certifying_officer,
             'certification_date' => $request->certification_date,
             'corpse_disposal_method' => $request->corpse_disposal_method,
             'other_disposal_method_specify' => $request->other_disposal_method_specify,
             'cemetery_or_crematory_name' => $request->cemetery_or_crematory_name,
             'cemetery_or_crematory_address' => $request->cemetery_or_crematory_address,
             'age_of_mother' => $request->age_of_mother,
             'method_of_delivery' => $request->method_of_delivery,
             'length_of_pregnancy' => $request->length_of_pregnancy,
             'type_of_birth' => $request->type_of_birth,
             'multiple_birth_position' => $request->multiple_birth_position,
             'affiant_name' => $request->affiant_name,
             'legal_status' => $request->legal_status,
             'affiant_address' => $request->affiant_address,
             'deceased_name' => $request->deceased_name,
             'burial_place' => $request->burial_place,
             'attended_by' => $request->attended_by,
             'attended_by_person' => $request->attended_by_person,
             'not_attended' => $request->not_attended,
             'cause_of_death' => $request->cause_of_death,
             'reason_delay' => $request->reason_delay,
             'day_signed' => $request->day_signed,
             'month_signed' => $request->month_signed,
             'year_signed' => $request->year_signed,
             'place_signed' => $request->place_signed,
             'day_sworn' => $request->day_sworn,
             'month_sworn' => $request->month_sworn,
             'year_sworn' => $request->year_sworn,
             'place_sworn' => $request->place_sworn,
             'tax_cert_date' => $request->tax_cert_date,
             'tax_cert_place' => $request->tax_cert_place,

        ]);

        return redirect('/home/services/deathform/deathformcert'); // Or another route to show success
    }
/*End Death*/ 
}