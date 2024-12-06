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
        // Store the data directly in the database
        BirthCertificateRequest::create([
            'child_first_name' => $request->child_first_name,
            'child_middle_name' => $request->child_middle_name,
            'child_last_name' => $request->child_last_name,
            'child_sex' => $request->child_sex,
            'child_date_of_birth' => $request->child_date_of_birth,
            'child_place_of_birth' => $request->child_place_of_birth,
            'mother_first_name' => $request->mother_first_name,
            'mother_middle_name' => $request->mother_middle_name,
            'mother_last_name' => $request->mother_last_name,
            'mother_date_of_birth' => $request->mother_date_of_birth,
            'mother_citizenship' => $request->mother_citizenship,
            'mother_religion' => $request->mother_religion,
            'mother_occupation' => $request->mother_occupation,
            'mother_residence' => $request->mother_residence,
        ]);

        return redirect('/home/services/form102/birthform'); // Or another route to show success
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
        // Store the data directly in the database
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

        return redirect('/home/services/marriageform/birthform'); // Or another route to show success
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
            'cause_of_death' => 'required|string', // or other validation rules
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