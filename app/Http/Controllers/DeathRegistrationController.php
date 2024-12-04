<?php

namespace App\Http\Controllers;

use App\Models\DeathRegistration;
use Illuminate\Http\Request;

class DeathRegistrationController extends Controller
{
    // Show the form to create a new death registration
    public function create()
    {
        return view('deathcrud.create');  // Update to use 'deathcrud.create'
    }

    // Store a newly created death registration in the database
    public function store(Request $request)
    {
        $request->validate([
            'deceased_first_name' => 'required|string',
            'deceased_last_name' => 'required|string',
            'deceased_dob' => 'required|date',
            'date_of_death' => 'required|date',   // Match the field name
            'place_of_death' => 'required|string', // Match the field name
            'cause_of_death' => 'required|string', // Match the field name
            'informant_name' => 'required|string',
            'informant_relationship' => 'required|string',
            'informant_address' => 'required|string',
            'informant_date_signed' => 'required|date',
        ]);

        // Create the death registration with validated data
        DeathRegistration::create($request->all());

        return redirect()->route('death-registration.index')->with('success', 'Death Registration Created Successfully!');
    }

    // Display a listing of death registrations (view all records)
    public function index()
    {
        $deathRegistrations = DeathRegistration::all();
        return view('deathcrud.index', compact('deathRegistrations'));  // Update to 'deathcrud.index' if necessary
    }

    // Show the form for editing a death registration
    public function edit($id)
    {
        $deathRegistration = DeathRegistration::findOrFail($id);
        return view('deathcrud.edit', compact('deathRegistration'));  // Update to 'deathcrud.edit'
    }

    // Update the specified death registration in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'deceased_first_name' => 'required|string',
            'deceased_last_name' => 'required|string',
            'deceased_dob' => 'required|date',
            'date_of_death' => 'required|date',  // Match the field name
            'place_of_death' => 'required|string', // Match the field name
            'cause_of_death' => 'required|string', // Match the field name
            'informant_name' => 'required|string',
            'informant_relationship' => 'required|string',
            'informant_address' => 'required|string',
            'informant_date_signed' => 'required|date',
        ]);

        $deathRegistration = DeathRegistration::findOrFail($id);
        $deathRegistration->update($request->all());

        return redirect()->route('death-registration.index')->with('success', 'Death Registration Updated Successfully!');
    }

    // Remove the specified death registration from the database
    public function destroy($id)
    {
        $deathRegistration = DeathRegistration::findOrFail($id);
        $deathRegistration->delete();

        return redirect()->route('death-registration.index')->with('success', 'Death Registration Deleted Successfully!');
    }
}
