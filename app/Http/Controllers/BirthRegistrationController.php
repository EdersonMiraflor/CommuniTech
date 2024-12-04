<?php

namespace App\Http\Controllers;

use App\Models\BirthRegistration;
use Illuminate\Http\Request;

class BirthRegistrationController extends Controller{
    public function store(Request $request)
    {
        // Validate the incoming form data
        $validatedData = $request->validate([
            'child_first_name' => 'required|string|max:255',
            'child_middle_name' => 'nullable|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'child_sex' => 'required|string|in:Male,Female',
            'child_date_of_birth' => 'required|date',
            'child_place_of_birth' => 'required|string|max:255',
            
            'mother_first_name' => 'required|string|max:255',
            'mother_middle_name' => 'nullable|string|max:255',
            'mother_last_name' => 'required|string|max:255',
            'mother_date_of_birth' => 'required|date',
            'mother_citizenship' => 'required|string|max:255',
            'mother_religion' => 'nullable|string|max:255',
            'mother_occupation' => 'nullable|string|max:255',
            'mother_residence' => 'required|string|max:255',
            
            'father_first_name' => 'required|string|max:255',
            'father_middle_name' => 'nullable|string|max:255',
            'father_last_name' => 'required|string|max:255',
            'father_date_of_birth' => 'required|date',
            'father_citizenship' => 'required|string|max:255',
            'father_religion' => 'nullable|string|max:255',
            'father_occupation' => 'nullable|string|max:255',
            'father_residence' => 'required|string|max:255',
            
            'informant_name' => 'required|string|max:255',
            'informant_relationship_to_child' => 'required|string|max:255',
            'informant_address' => 'required|string|max:255',
            'informant_date_signed' => 'required|date',
            
            'attendant_name' => 'required|string|max:255',
            'attendant_title' => 'required|string|max:255',
            'attendant_address' => 'required|string|max:255',
            'attendant_date_signed' => 'required|date',
        ]);

        // Create a new record in the BirthRegistration table
        BirthRegistration::create($validatedData);

        // Redirect with a success message
        return redirect()->route('birth-registrations.index')->with('success', 'Birth registration submitted successfully.');
    }
}
