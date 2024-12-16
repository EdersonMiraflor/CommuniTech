<?php
namespace App\Http\Controllers;

use App\Models\Rider;
use Illuminate\Http\Request;

class RiderController extends Controller
{
    public function create()
    {
        return view('riders.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:riders,email',
            'contact_number' => 'required|string|max:15',
            'address' => 'required|string',
            'vehicle_type' => 'required|string',
        ]);

        // Save the data
        Rider::create($validated);

        // Redirect to the confirmation page
        return redirect()->route('riders.confirmation');
    }

    public function confirmation()
    {
        return view('riders.confirmation');
    }
}
