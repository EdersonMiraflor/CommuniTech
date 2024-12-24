<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;
use App\Models\MarriageCertificateRequest;
use App\Models\DeathCertificateRequest;
use App\Models\Qrcode;
use App\Models\PdfRequester;

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
        // Get the logged-in user's ID
        $userId = auth()->id();
        BirthCertificateRequest::create([
            'User_Id' => $userId, // Assign the logged-in user's ID as the foreign key
            'user_name' => $request->user_name,  
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
        ]);

        $requestedCertificate = "Birth Certificate";
        PdfRequester::create([
            'User_Id' => $userId,
            'certificate_type' => $requestedCertificate,
        ]);

        $qrscan = Qrcode::latest()->first(); 
        $qrscans = Qrcode::all();
        return view('page.payment', compact('requestedCertificate', 'qrscan')); 
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
        // Get the logged-in user's ID
        $userId = auth()->id();
        MarriageCertificateRequest::create([
        'User_Id' => $userId, // Assign the logged-in user's ID as the foreign key
        'user_name' => $request->user_name,  
        'husband_first_name' => $request->husband_first_name,
        'husband_middle_name' => $request->husband_middle_name,
        'husband_last_name' => $request->husband_last_name,
        'husband_birthdate' => $request->husband_birthdate,
        'husband_age' => $request->husband_age,
        'husband_city_municipality' => $request->husband_city_municipality,
        'husband_province' => $request->husband_province,
        'husband_country' => $request->husband_country,
        'husband_citizenship' => $request->husband_citizenship,
        'husband_residence' => $request->husband_residence,
        'husband_religion' => $request->husband_religion,
        'husband_father_first_name' => $request->husband_father_first_name,
        'husband_father_middle_name' => $request->husband_father_middle_name,
        'husband_father_last_name' => $request->husband_father_last_name,
        'husband_father_citizenship' => $request->husband_father_citizenship,
        'husband_mother_first_name' => $request->husband_mother_first_name,
        'husband_mother_middle_name' => $request->husband_mother_middle_name,
        'husband_mother_maiden_last_name' => $request->husband_mother_maiden_last_name,
        'husband_mother_citizenship' => $request->husband_mother_citizenship,
        'wife_first_name' => $request->wife_first_name,
        'wife_middle_name' => $request->wife_middle_name,
        'wife_last_name' => $request->wife_last_name,
        'wife_birthdate' => $request->wife_birthdate,
        'wife_age' => $request->wife_age,
        'wife_city_municipality' => $request->wife_city_municipality,
        'wife_province' => $request->wife_province,
        'wife_country' => $request->wife_country,
        'wife_citizenship' => $request->wife_citizenship,
        'wife_residence' => $request->wife_residence,
        'wife_religion' => $request->wife_religion,
        'wife_father_first_name' => $request->wife_father_first_name,
        'wife_father_middle_name' => $request->wife_father_middle_name,
        'wife_father_last_name' => $request->wife_father_last_name,
        'wife_father_citizenship' => $request->wife_father_citizenship,
        'wife_mother_first_name' => $request->wife_mother_first_name,
        'wife_mother_middle_name' => $request->wife_mother_middle_name,
        'wife_mother_maiden_last_name' => $request->wife_mother_maiden_last_name,
        'wife_mother_citizenship' => $request->wife_mother_citizenship,
        'marriage_date1' => $request->marriage_date1,
        'marriage_place' => $request->marriage_place,
        'officiant_name' => $request->officiant_name,
        'officiant_position' => $request->officiant_position,
        'witnesses' => $request->witnesses,
            ]);
            $requestedCertificate = "Marriage Certificate";
            PdfRequester::create([
                'User_Id' => $userId,
                'certificate_type' => $requestedCertificate,
            ]);

            $qrscan = Qrcode::latest()->first(); 
            $qrscans = Qrcode::all();
            return view('page.payment', compact('requestedCertificate', 'qrscans', 'qrscan'));
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
        // Get the logged-in user's ID
        $userId = auth()->id();
        // Store the data directly in the database
        DeathCertificateRequest::create([
            'User_Id' => $userId, // Assign the logged-in user's ID as the foreign key
            'user_name' => $request->user_name,  
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
        ]);

        $requestedCertificate = "Death Certificate";
        PdfRequester::create([
            'User_Id' => $userId,
            'certificate_type' => $requestedCertificate,
        ]);

        $qrscan = Qrcode::latest()->first(); 
        $qrscans = Qrcode::all();
        return view('page.payment', compact('requestedCertificate', 'qrscan', 'qrscans'));
    }
/*End Death*/ 
}