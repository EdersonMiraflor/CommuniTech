<?php
namespace App\Http\Controllers;

use App\Models\BirthRegistration;
use Illuminate\Http\Request;

class BirthRegistrationController extends Controller
{
    // Display the list of all birth registrations
    public function index()
    {
        $birthRegistrations = BirthRegistration::all();
        return view('birthcrud.index', compact('birthRegistrations'));
    }

    // Show the form to create a new birth registration
    public function create()
    {
        return view('birthcrud.create');
    }

    // Store a newly created birth registration
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'child_first_name' => 'required|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'child_dob' => 'required|date_format:d/m/Y',
            'child_place_of_birth' => 'required|string|max:255',
            'mother_first_name' => 'required|string|max:255',
            'mother_last_name' => 'required|string|max:255',
            'mother_dob' => 'required|date_format:d/m/Y',
            'mother_citizenship' => 'required|string|max:255',
            'father_first_name' => 'required|string|max:255',
            'father_last_name' => 'required|string|max:255',
            'father_dob' => 'required|date_format:d/m/Y',
            'father_citizenship' => 'required|string|max:255',
            'informant_name' => 'required|string|max:255',
            'informant_relationship' => 'required|string|max:255',
            'informant_address' => 'required|string|max:255',
            'informant_date_signed' => 'required|date_format:d/m/Y',
            'attendant_name' => 'required|string|max:255',
            'attendant_date_signed' => 'required|date_format:d/m/Y',
        ]);

        BirthRegistration::create($validatedData);

        return redirect()->route('birth-registration.index')->with('success', 'Birth registration created successfully!');
    }

    // Show the form to edit a birth registration
    public function edit($id)
    {
        $birthRegistration = BirthRegistration::findOrFail($id);
        return view('birthcrud.edit', compact('birthRegistration'));
    }

    // Update a specific birth registration
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'child_first_name' => 'required|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'child_dob' => 'required|date_format:d/m/Y',
            'child_place_of_birth' => 'required|string|max:255',
            'mother_first_name' => 'required|string|max:255',
            'mother_last_name' => 'required|string|max:255',
            'mother_dob' => 'required|date_format:d/m/Y',
            'mother_citizenship' => 'required|string|max:255',
            'father_first_name' => 'required|string|max:255',
            'father_last_name' => 'required|string|max:255',
            'father_dob' => 'required|date_format:d/m/Y',
            'father_citizenship' => 'required|string|max:255',
            'informant_name' => 'required|string|max:255',
            'informant_relationship' => 'required|string|max:255',
            'informant_address' => 'required|string|max:255',
            'informant_date_signed' => 'required|date_format:d/m/Y',
            'attendant_name' => 'required|string|max:255',
            'attendant_date_signed' => 'required|date_format:d/m/Y',
        ]);

        $birthRegistration = BirthRegistration::findOrFail($id);
        $birthRegistration->update($validatedData);

        return redirect()->route('birth-registration.index')->with('success', 'Birth registration updated successfully!');
    }

    // Delete a birth registration
    public function destroy($id)
    {
        BirthRegistration::findOrFail($id)->delete();
        return redirect()->route('birth-registration.index')->with('success', 'Birth registration deleted successfully!');
    }
}
