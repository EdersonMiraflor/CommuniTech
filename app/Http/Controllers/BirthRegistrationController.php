<?php

namespace App\Http\Controllers;

use App\Models\BirthRegistration;
use Illuminate\Http\Request;

class BirthRegistrationController extends Controller
{
    /**
     * Display a listing of the birth registrations.
     */
    public function index()
    {
        // Retrieve all birth registrations
        $birthRegistrations = BirthRegistration::all();

        // Return the view with birth registrations data
        return view('birthcrud.index', compact('birthRegistrations'));
    }

    /**
     * Show the form for creating a new birth registration.
     */
    public function create()
    {
        // Return the view for creating a new birth registration
        return view('birthcrud.create');
    }

    /**
     * Store a newly created birth registration in the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'child_first_name' => 'required|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'child_dob' => 'required|date_format:Y-m-d', // Ensure consistent date format
            'child_place_of_birth' => 'required|string|max:255',
            'mother_first_name' => 'required|string|max:255',
            'mother_last_name' => 'required|string|max:255',
            'mother_dob' => 'required|date_format:Y-m-d',
            'mother_citizenship' => 'required|string|max:255',
            'father_first_name' => 'required|string|max:255',
            'father_last_name' => 'required|string|max:255',
            'father_dob' => 'required|date_format:Y-m-d',
            'father_citizenship' => 'required|string|max:255',
            'informant_name' => 'required|string|max:255',
            'informant_relationship' => 'required|string|max:255',
            'informant_address' => 'required|string|max:255',
            'informant_date_signed' => 'required|date_format:Y-m-d',
            'attendant_name' => 'required|string|max:255',
            'attendant_date_signed' => 'required|date_format:Y-m-d',
        ]);

        // Create the birth registration using the validated data
        BirthRegistration::create($validatedData);

        // Redirect back to the index with a success message
        return redirect()->route('birth-registration.index')
                         ->with('success', 'Birth registration created successfully!');
    }

    /**
     * Show the form for editing a specific birth registration.
     */
    public function edit($id)
    {
        // Retrieve the birth registration by ID
        $birthRegistration = BirthRegistration::findOrFail($id);

        // Return the edit view with the birth registration data
        return view('birthcrud.edit', compact('birthRegistration'));
    }

    /**
     * Update a specific birth registration in the database.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'child_first_name' => 'required|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'child_dob' => 'required|date_format:Y-m-d',
            'child_place_of_birth' => 'required|string|max:255',
            'mother_first_name' => 'required|string|max:255',
            'mother_last_name' => 'required|string|max:255',
            'mother_dob' => 'required|date_format:Y-m-d',
            'mother_citizenship' => 'required|string|max:255',
            'father_first_name' => 'required|string|max:255',
            'father_last_name' => 'required|string|max:255',
            'father_dob' => 'required|date_format:Y-m-d',
            'father_citizenship' => 'required|string|max:255',
            'informant_name' => 'required|string|max:255',
            'informant_relationship' => 'required|string|max:255',
            'informant_address' => 'required|string|max:255',
            'informant_date_signed' => 'required|date_format:Y-m-d',
            'attendant_name' => 'required|string|max:255',
            'attendant_date_signed' => 'required|date_format:Y-m-d',
        ]);

        // Find the birth registration by ID
        $birthRegistration = BirthRegistration::findOrFail($id);

        // Update the birth registration with the validated data
        $birthRegistration->update($validatedData);

        // Redirect back to the index with a success message
        return redirect()->route('birth-registration.index')
                         ->with('success', 'Birth registration updated successfully!');
    }

    /**
     * Remove a specific birth registration from the database.
     */
    public function destroy($id)
    {
        // Find the birth registration by ID
        $birthRegistration = BirthRegistration::findOrFail($id);

        // Delete the birth registration record
        $birthRegistration->delete();

        // Redirect back to the index with a success message
        return redirect()->route('birth-registration.index')
                         ->with('success', 'Birth registration deleted successfully!');
    }
}
