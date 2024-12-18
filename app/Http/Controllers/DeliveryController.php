<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryDetails;
use App\Models\User;

class DeliveryController extends Controller
{
    public function create()
    {
        $riders = User::where('Credential', 'rider')->get();
        $clients = User::where('Credential', 'user')->get(); 
        return view('delivery', compact('riders', 'clients'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'rider' => 'required|exists:users,User_Id', // Ensure a rider is selected and exists in the 'users' table
            'estimated_delivery_day' => [
                'required',
                'date',
                'after_or_equal:' . now()->addDays(3), // Ensure it's 3 days after today
                function ($attribute, $value, $fail) {
                    $dayOfWeek = \Carbon\Carbon::parse($value)->dayOfWeek; // Get the day of the week
                    if ($dayOfWeek == 6 || $dayOfWeek == 0) { // Check if the date is Saturday or Sunday
                        return $fail('The delivery date cannot be on a weekend (Saturday or Sunday). Please choose a weekday.');
                    }
                },
            ],
            'name' => 'required|string|max:255', // Ensure the client name is provided and within character limit
            'requested_certificate' => 'required|string|max:255', // Ensure the certificate name is provided and within character limit
            'quantity' => 'required|integer|min:1', // Ensure quantity is a positive integer
            'address' => 'required|string|max:255', // Ensure address is provided and within character limit
            'barangay' => 'required|string|max:255', // Ensure barangay is provided and within character limit
        ]);
        
        // Safely retrieve the rider's name
        $rider = User::findOrFail($request->rider);
        
        // Safely retrieve the client based on the provided 'name' (or 'User_Id' if that's used)
        $client = User::findOrFail($request->name); // or use 'name' to retrieve the client
    
        // Create the delivery record
        DeliveryDetails::create([
            'User_Id' => auth()->id(),
            'rider' => $rider->name,
            'rider_number' => $rider->Mobile_Number,
            'estimated_delivery_day' => $request->estimated_delivery_day,
            'name' => $client->name, // Now this will work because $client is defined
            'requested_certificate' => $request->requested_certificate,
            'quantity' => $request->quantity,
            'address' => $request->address,
            'barangay' => $request->barangay,
            'status' => 'pending',
        ]);
    
        return redirect()->route('delivery.create')->with('success', 'Delivery record created successfully.');
    }
    
}
