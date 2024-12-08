<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function create()
    {
        return view('page.payment');
    }

    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'requested_certificate' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
            'barangay' => 'required|in:Cabacongan,Cawayan,Malobago,Tinapian,Manumbalay,Buyo,IT-Ba,Cawit,Balasbas,Bamban,Pawa,Hulugan,Balabagon,Cabit,Nagotgot,Inang Maharang',
            'proof_of_payment' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Handle proof of payment file upload
        $proofOfPaymentPath = null;
        if ($request->hasFile('proof_of_payment')) {
            $proofOfPaymentPath = $request->file('proof_of_payment')->store('uploads', 'public');
        }

        // Create a new payment record
        Payment::create([
            'name' => $validatedData['name'],
            'requested_certificate' => $validatedData['requested_certificate'],
            'quantity' => $validatedData['quantity'],
            'address' => $validatedData['address'],
            'barangay' => $validatedData['barangay'],
            'proof_of_payment' => $proofOfPaymentPath,
        ]);

        // Redirect with success message
        return redirect('page.payment');
    }
}
