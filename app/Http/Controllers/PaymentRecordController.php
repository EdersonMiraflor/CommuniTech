<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paymentrecord;
use Illuminate\Support\Facades\Auth;
use App\Models\Otpform;
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
        'email' => 'required|email',
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
        'email' => $request->email,   
        'quantity' => $request->quantity,
        'address' => $request->address,
        'mobile' => $request->mobile,
        'barangay' => $request->barangay,
        'proof' => $request->hasFile('proof') ? $request->file('proof')->store('proofs', 'public') : null, // Store the proof file if present
    ]);

    // Find all otpform records for the given name (instead of User_Id)
    $otpForms = Otpform::where('name', $request->name)->get();

    if ($otpForms->isEmpty()) {
        \Log::info("No records found in otpform for name: " . $request->name);
    } else {
        \Log::info("Updating email for " . count($otpForms) . " records for name: " . $request->name);
    }

    // Loop through each record and update the email
    foreach ($otpForms as $otpForm) {
        // Debugging: Log current email
        \Log::info('Current Email: ' . $otpForm->email);

        // Force update the email to "request@gmail.com"
        if ($otpForm->email !== 'request@gmail.com') {
            $otpForm->email = 'request@gmail.com';
            $otpForm->save();

            // Debugging: Confirm that the email was updated
            \Log::info('Updated Email: ' . $otpForm->email);
        } else {
            \Log::info('Email was already "request@gmail.com", no update needed.');
        }
    }

    return redirect('home')->with('flash_message', 'Your Request Has Been Created!, Please go to your "My Account" And Check "Request History" for your request status');
}

}
