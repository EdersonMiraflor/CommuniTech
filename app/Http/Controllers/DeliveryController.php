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
        return view('delivery', compact('riders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rider' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'requested_certificate' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'barangay' => 'required|string|max:255',
            'proof' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
    
        DeliveryDetails::create([
            'User_Id' => auth()->id(),
            'rider' => User::find($request->rider)->name,
            'estimated_delivery_day' => $request-> estimated_delivery_day,
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
