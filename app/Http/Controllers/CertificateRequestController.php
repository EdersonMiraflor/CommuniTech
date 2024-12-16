<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;
use App\Models\MarriageCertificateRequest;
use App\Models\DeathCertificateRequest;
use App\Models\Qrcode;

class CertificateRequestController extends Controller
{

/*Live Birth*/
     /*Start Live Birth*/
     public function birthcreate()
     {
         // This method simply returns the birth certificate creation form.
         return view('page.form102');
     }
     
     public function birthstore(Request $request)
     {
         // Define validation rules for the incoming request
         $validated = $request->validate([
             'child_first' => 'required|string|max:255',
             'child_middle' => 'nullable|string|max:255',
             'child_last' => 'required|string|max:255',
             'child_sex' => 'required|string|in:Male,Female', // Example: restrict to male or female
             'child_birthdate' => 'required|date',
             'child_birthplace' => 'required|string|max:255',
             'multiple_birth' => 'nullable|string|max:255',
             'birth_type' => 'nullable|string|max:255',
             'birth_order' => 'nullable|integer|min:1',
             'birth_weight' => 'nullable|numeric|min:0',
             'mother_first_name' => 'required|string|max:255',
             'mother_middle_name' => 'nullable|string|max:255',
             'mother_last_name' => 'required|string|max:255',
             'citizenship' => 'nullable|string|max:255',
             'religion' => 'nullable|string|max:255',
             'total_number' => 'nullable|integer|min:0',
             'children' => 'nullable|integer|min:0',
             'dead_child' => 'nullable|integer|min:0',
             'occupation' => 'nullable|string|max:255',
             'mother_age' => 'nullable|integer|min:0',
             'mother_street' => 'nullable|string|max:255',
             'mother_city' => 'nullable|string|max:255',
             'mother_province' => 'nullable|string|max:255',
             'mother_country' => 'nullable|string|max:255',
             'father_first_name' => 'required|string|max:255',
             'father_middle_name' => 'nullable|string|max:255',
             'father_last_name' => 'required|string|max:255',
             'citizenship2' => 'nullable|string|max:255',
             'religion2' => 'nullable|string|max:255',
             'occupation2' => 'nullable|string|max:255',
             'father_age' => 'nullable|integer|min:0',
             'father_street' => 'nullable|string|max:255',
             'father_city' => 'nullable|string|max:255',
             'father_province' => 'nullable|string|max:255',
             'father_country' => 'nullable|string|max:255',
             'marriage_date' => 'nullable|date',
             'marriage_street' => 'nullable|string|max:255',
             'marriage_municipality' => 'nullable|string|max:255',
             'marriage_province' => 'nullable|string|max:255',
             'marriage_country' => 'nullable|string|max:255',
             'attendant_role' => 'nullable|string|max:255',
             'other_attendant_role' => 'nullable|string|max:255',
             'father_name' => 'nullable|string|max:255',
             'mother_name' => 'nullable|string|max:255',
             'name_child' => 'required|string|max:255',
             'birth_date' => 'required|date',
             'birth_place' => 'required|string|max:255',
             'signature1' => 'required|string|max:255',
             'signature2' => 'required|string|max:255',
         ]);
     
         try {
             // Get the logged-in user's ID
             $userId = auth()->id();
     
             // Store the birth certificate data in the database
             BirthCertificateRequest::create([
                 'User_Id' => $userId, // Assign the logged-in user's ID as the foreign key
                 'child_first' => $validated['child_first'],
                 'child_middle' => $validated['child_middle'],
                 'child_last' => $validated['child_last'],
                 'child_sex' => $validated['child_sex'],
                 'child_birthdate' => $validated['child_birthdate'],
                 'child_birthplace' => $validated['child_birthplace'],
                 'multiple_birth' => $validated['multiple_birth'],
                 'birth_type' => $validated['birth_type'],
                 'birth_order' => $validated['birth_order'],
                 'birth_weight' => $validated['birth_weight'],
                 'mother_first_name' => $validated['mother_first_name'],
                 'mother_middle_name' => $validated['mother_middle_name'],
                 'mother_last_name' => $validated['mother_last_name'],
                 'citizenship' => $validated['citizenship'],
                 'religion' => $validated['religion'],
                 'total_number' => $validated['total_number'],
                 'children' => $validated['children'],
                 'dead_child' => $validated['dead_child'],
                 'occupation' => $validated['occupation'],
                 'mother_age' => $validated['mother_age'],
                 'mother_street' => $validated['mother_street'],
                 'mother_city' => $validated['mother_city'],
                 'mother_province' => $validated['mother_province'],
                 'mother_country' => $validated['mother_country'],
                 'father_first_name' => $validated['father_first_name'],
                 'father_middle_name' => $validated['father_middle_name'],
                 'father_last_name' => $validated['father_last_name'],
                 'citizenship2' => $validated['citizenship2'],
                 'religion2' => $validated['religion2'],
                 'occupation2' => $validated['occupation2'],
                 'father_age' => $validated['father_age'],
                 'father_street' => $validated['father_street'],
                 'father_city' => $validated['father_city'],
                 'father_province' => $validated['father_province'],
                 'father_country' => $validated['father_country'],
                 'marriage_date' => $validated['marriage_date'],
                 'marriage_street' => $validated['marriage_street'],
                 'marriage_municipality' => $validated['marriage_municipality'],
                 'marriage_province' => $validated['marriage_province'],
                 'marriage_country' => $validated['marriage_country'],
                 'attendant_role' => $validated['attendant_role'],
                 'other_attendant_role' => $validated['other_attendant_role'],
                 'father_name' => $validated['father_name'],
                 'mother_name' => $validated['mother_name'],
                 'name_child' => $validated['name_child'],
                 'birth_date' => $validated['birth_date'],
                 'birth_place' => $validated['birth_place'],
                 'signature1' => $validated['signature1'],
                 'signature2' => $validated['signature2'],
             ]);
     
             // Get the most recent QR code scan
             $qrscan = Qrcode::latest()->first();
     
             // Display the payment page with the requested certificate and QR code
             $requestedCertificate = "Birth Certificate";
             return view('page.payment', compact('requestedCertificate', 'qrscan'));
             
         } catch (\Exception $e) {
             // Handle any errors during the saving process
             return redirect()->back()->with('error', 'There was an error processing your request. Please try again.');
         }
     }
     
/*End Live Birth*/
 
/*Marriage*/
    /*Start Marriage*/
    public function marriagestore(Request $request)
    {  
        // Validate request data
        $validated = $request->validate([
            'husband_first_name' => 'required|string|max:255',
            'husband_middle_name' => 'nullable|string|max:255',
            'husband_last_name' => 'required|string|max:255',
            'husband_birthdate' => 'required|date',
            'husband_age' => 'required|integer|min:18',
            'husband_city_municipality' => 'nullable|string|max:255',
            'husband_province' => 'nullable|string|max:255',
            'husband_country' => 'nullable|string|max:255',
            'husband_citizenship' => 'nullable|string|max:255',
            'husband_residence' => 'nullable|string|max:255',
            'husband_religion' => 'nullable|string|max:255',
            'husband_father_first_name' => 'nullable|string|max:255',
            'husband_father_middle_name' => 'nullable|string|max:255',
            'husband_father_last_name' => 'nullable|string|max:255',
            'husband_father_citizenship' => 'nullable|string|max:255',
            'husband_mother_first_name' => 'nullable|string|max:255',
            'husband_mother_middle_name' => 'nullable|string|max:255',
            'husband_mother_maiden_last_name' => 'nullable|string|max:255',
            'husband_mother_citizenship' => 'nullable|string|max:255',
        
            'wife_first_name' => 'required|string|max:255',
            'wife_middle_name' => 'nullable|string|max:255',
            'wife_last_name' => 'required|string|max:255',
            'wife_birthdate' => 'required|date',
            'wife_age' => 'required|integer|min:18',
            'wife_city_municipality' => 'nullable|string|max:255',
            'wife_province' => 'nullable|string|max:255',
            'wife_country' => 'nullable|string|max:255',
            'wife_citizenship' => 'nullable|string|max:255',
            'wife_residence' => 'nullable|string|max:255',
            'wife_religion' => 'nullable|string|max:255',
            'wife_father_first_name' => 'nullable|string|max:255',
            'wife_father_middle_name' => 'nullable|string|max:255',
            'wife_father_last_name' => 'nullable|string|max:255',
            'wife_father_citizenship' => 'nullable|string|max:255',
            'wife_mother_first_name' => 'nullable|string|max:255',
            'wife_mother_middle_name' => 'nullable|string|max:255',
            'wife_mother_maiden_last_name' => 'nullable|string|max:255',
            'wife_mother_citizenship' => 'nullable|string|max:255',
        
            'marriage_date1' => 'required|date',
            'marriage_place' => 'required|string|max:255',
            'officiant_name' => 'required|string|max:255',
            'officiant_position' => 'required|string|max:255',
            'witnesses' => 'required|string|max:255',
            'affiant_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'marriage_registration_for' => 'required|string|max:255',
        
            'marriage_date2' => 'nullable|date',
            'solemnizing_officer' => 'nullable|string|max:255',
            'ceremony_type' => 'nullable|string|max:255',
            'license_required' => 'nullable|string|max:255',
            'license_no' => 'nullable|string|max:100',
            'license_date' => 'nullable|date',
            'license_place' => 'nullable|string|max:255',
            'license_required2' => 'nullable|string|max:255',
            'article_no' => 'nullable|string|max:255',
        
            'citizenship' => 'nullable|string|max:255',
            'spouse_citizenship' => 'nullable|string|max:255',
            'delay_reason' => 'nullable|string|max:255',
        
            'day2' => 'nullable|integer|min:1|max:31',
            'month2' => 'nullable|integer|min:1|max:12',
            'year2' => 'nullable|integer|min:1900|max:' . date('Y'),
            
            'location' => 'nullable|string|max:255',
            'subscribed_day' => 'nullable|integer|min:1|max:31',
            'subscribed_month' => 'nullable|integer|min:1|max:12',
            'subscribed_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'notary_location' => 'nullable|string|max:255',
            'admin_officer_position' => 'nullable|string|max:255',
            'admin_officer_name' => 'nullable|string|max:255',
            'admin_officer_address' => 'nullable|string|max:255',
        ]);
        
    
        try {
            // Get the logged-in user's ID
            $userId = auth()->id();
    
            // Store the data in the database
            MarriageCertificateRequest::create([
                'User_Id' => $userId,
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
                'affiant_name' => $request->affiant_name,
                'address' => $request->address,
                'marriage_registration_for' => $request->marriage_registration_for,
                'marriage_date2' => $request->marriage_date2,
                'solemnizing_officer' => $request->solemnizing_officer,
                'ceremony_type' => $request->ceremony_type,
                'license_required' => $request->license_required,
                'license_no' => $request->license_no,
                'license_date' => $request->license_date,
                'license_place' => $request->license_place,
                'license_required2' => $request->license_required2,
                'article_no' => $request->article_no,
                'citizenship' => $request->citizenship,
                'spouse_citizenship' => $request->spouse_citizenship,
                'delay_reason' => $request->delay_reason,
                'day2' => $request->day2,
                'month2' => $request->month2,
                'year2' => $request->year2,
                'location' => $request->location,
                'subscribed_day' => $request->subscribed_day,
                'subscribed_month' => $request->subscribed_month,
                'subscribed_year' => $request->subscribed_year,
                'notary_location' => $request->notary_location,
                'admin_officer_position' => $request->admin_officer_position,
                'admin_officer_name' => $request->admin_officer_name,
                'admin_officer_address' => $request->admin_officer_address,
            ]);
    
            // If everything is successful, redirect to payment page
            $requestedCertificate = "Marriage Certificate";
            $qrscan = Qrcode::latest()->first(); 
            $qrscans = Qrcode::all();
            return view('page.payment', compact('requestedCertificate', 'qrscans', 'qrscan'));
    
        } catch (\Exception $e) {
            // Handle the error (e.g., database issues)
            return back()->with('error', 'There was an issue processing your request. Please try again.');
        }
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
    // Validate the incoming request data
    $request->validate([
        'full_name' => 'required|string|max:255',
        'sex' => 'required|string|max:10',
        'date_of_death' => 'required|date',
        'date_of_birth' => 'required|date',
        'completed_years' => 'nullable|integer',
        'months_days' => 'nullable|string|max:50',
        'hours_minutes_seconds' => 'nullable|string|max:50',
        'place_of_death' => 'required|string|max:255',
        'civil_status' => 'required|string|max:50',
        'religion' => 'nullable|string|max:100',
        'citizenship' => 'nullable|string|max:100',
        'residence' => 'nullable|string|max:255',
        'father_name' => 'nullable|string|max:255',
        'mother_maiden_name' => 'nullable|string|max:255',
        'immediate_cause' => 'nullable|string|max:255',
        'antecedent_cause' => 'nullable|string|max:255',
        'underlying_cause' => 'nullable|string|max:255',
        'other_conditions' => 'nullable|string|max:255',
        'maternal_condition' => 'nullable|string|max:255',
        'manner_of_death' => 'required|string|max:50',
        'place_of_occurrence' => 'required|string|max:255',
        'autopsy' => 'required|string|max:50',
        'type_of_attendant' => 'nullable|string|max:50',
        'attendance_duration' => 'nullable|string|max:50',
        'certifying_officer' => 'nullable|string|max:255',
        'certification_date' => 'nullable|date',
        'corpse_disposal_method' => 'required|string|max:100',
        'other_disposal_method_specify' => 'nullable|string|max:255',
        'cemetery_or_crematory_name' => 'nullable|string|max:255',
        'cemetery_or_crematory_address' => 'nullable|string|max:255',
        'age_of_mother' => 'nullable|integer',
        'method_of_delivery' => 'nullable|string|max:255',
        'length_of_pregnancy' => 'nullable|integer',
        'type_of_birth' => 'nullable|string|max:50',
        'multiple_birth_position' => 'nullable|string|max:50',
        'affiant_name' => 'nullable|string|max:255',
        'legal_status' => 'nullable|string|max:50',
        'affiant_address' => 'nullable|string|max:255',
        'deceased_name' => 'nullable|string|max:255',
        'burial_place' => 'nullable|string|max:255',
        'attended_by' => 'nullable|string|max:255',
        'attended_by_person' => 'nullable|string|max:255',
        'not_attended' => 'nullable|string|max:255',
        'cause_of_death' => 'nullable|string|max:255',
        'reason_delay' => 'nullable|string|max:255',
        'day_signed' => 'nullable|integer',
        'month_signed' => 'nullable|integer',
        'year_signed' => 'nullable|integer',
        'place_signed' => 'nullable|string|max:255',
        'day_sworn' => 'nullable|integer',
        'month_sworn' => 'nullable|integer',
        'year_sworn' => 'nullable|integer',
        'place_sworn' => 'nullable|string|max:255',
        'tax_cert_date' => 'nullable|date',
        'tax_cert_place' => 'nullable|string|max:255',
    ]);

    // Get the logged-in user's ID
    $userId = auth()->id();

    // Store the data directly in the database
    DeathCertificateRequest::create([
        'User_Id' => $userId,
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

    // Prepare data for the next view
    $requestedCertificate = "Death Certificate";
    $qrscan = Qrcode::latest()->first(); 
    $qrscans = Qrcode::all();

    return view('page.payment', compact('requestedCertificate', 'qrscan', 'qrscans'));
}

/*End Death*/ 
}