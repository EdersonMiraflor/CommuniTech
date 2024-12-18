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
        /*
        $request->validate([
            'rider' => 'required|exists:users,User_Id',
            'estimated_delivery_day' => 'required|date|after_or_equal:today',
            'name' => 'required|string|max:255',
            'requested_certificate' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'barangay' => 'required|string|max:255',
            'proof' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
        */
        // Safely retrieve the rider's name
            $rider = User::findOrFail($request->rider);

            DeliveryDetails::create([
                'User_Id' => auth()->id(),
                'rider' => $rider->name,
                'rider_number' => $rider->number,
                'estimated_delivery_day' => $request->estimated_delivery_day,
                'name' => $request->name,
                'requested_certificate' => $request->requested_certificate,
                'quantity' => $request->quantity,
                'address' => $request->address,
                'mobile' => $request->mobile,
                'barangay' => $request->barangay,
                'status' => 'pending',
            ]);

        return redirect()->route('delivery.create')->with('success', 'Delivery record created successfully.');
    }
}
