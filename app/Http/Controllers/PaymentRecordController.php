<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paymentrecord;
use Illuminate\Support\Facades\Auth;

class PaymentRecordController extends Controller
{
    public function index()
    {
        return view('page.payment');
    }

     public function userrecord(Request $request)
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Validate the incoming data (you can add more rules as needed)
        $request->validate([
            'name' => 'required|string',
            'requested_certificate' => 'required|string',
            'quantity' => 'required|integer',
            'address' => 'required|string',
            'mobile' => 'required|string',
            'barangay' => 'required|string',
            'proof' => 'nullable|file|mimes:jpg,png,pdf', // Optional proof file
        ]);

        // Store the payment record data
        PaymentRecord::create([
            'User_Id' => $userId, // Assign the logged-in user's ID as the foreign key
            'name' => $request->name,   
            'requested_certificate' => $request->requested_certificate,
            'quantity' => $request->quantity,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'barangay' => $request->barangay,
            'proof' => $request->hasFile('proof') ? $request->file('proof')->store('proofs', 'public') : null, // Store the proof file if present
        ]);

        return redirect('payment')->with('flash_message', 'Payment record created!');
    }
}
