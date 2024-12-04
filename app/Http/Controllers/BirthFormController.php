<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthFormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'birthplace' => 'required|string|max:255',
        ]);

        // Process the form data (e.g., save to database or session for next step)
        // Example: store data in session
        session([
            'birth_form_data' => $request->all(),
        ]);

        // Redirect to the next step
        return redirect()->route('next-page-route'); // Replace with actual next page route
    }
}
