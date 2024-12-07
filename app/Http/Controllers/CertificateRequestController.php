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
        return view('page.marriage');
    }

    public function deathstore(Request $request)
    {

        $request->validate([
            'cause_of_death' => 'required|string',
        ]);
        

        // Store the data directly in the database
        DeathCertificateRequest::create([
            'deceased_name' => $request->deceased_name,
            'deceased_sex' => $request->deceased_sex,
            'deceased_dob' => $request->deceased_dob,
            'deceased_birthplace' => $request->deceased_birthplace,
            'death_date' => $request->death_date,
            'death_time' => $request->death_time,
            'death_place' => $request->death_place,
            'cause_of_death' => $request->cause_of_death,
            'informant_name' => $request->informant_name,
            'informant_relationship' => $request->informant_relationship,
            'informant_address' => $request->informant_address,
        ]);

        return redirect('/home/services/marriageform/deathform'); // Or another route to show success
    }
/*End Death*/ 
}