<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentRecord; 

class DeliveryController extends Controller
{
    // Display the delivery form
    public function index()
    {
        $records = PaymentRecord::where('status', 'pending')->get(); // Show only pending payments
        return view('admin.delivery', compact('records'));
    }

    // Handle form submission
    public function store(Request $request)
    {
        $request->validate([
            'payment_id' => 'required|exists:paymentrecord,Payment_Id',
            'status' => 'required|in:pending,verified',
        ]);

        // Update the payment status to 'verified'
        $record = PaymentRecord::find($request->payment_id);
        $record->status = $request->status;
        $record->save();

        return redirect()->route('admin.delivery')->with('success', 'Delivery details updated successfully.');
    }
}
