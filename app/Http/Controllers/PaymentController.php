<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Qrcode;

class PaymentController extends Controller
{
    public function index()
    {
        $qrscan = Qrcode::first(); // Fetch the single existing QR code
        return view('page.payment', compact('qrscan'));
    }
    
    public function create()
    {
        $qrscan = Qrcode::first(); // Fetch the single existing QR code
        return view('page.payment', compact('qrscan'));
    }
    
    public function store(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Retrieve the existing QR Code record (if any)
    $qrscan = Qrcode::first(); // Fetch the single existing QR code

    // If no record exists, create a new one
    if (!$qrscan) {
        $qrscan = new Qrcode();
    }

    // Handle file upload for the new photo
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/uploads/qrcode', $filename); // Save in storage/app/public/uploads/qrcode
        $qrscan->photo = $filename;
    }

    // Save the updated QR Code
    $qrscan->save();

    // Redirect back with a success message
    return redirect()->route('payment.create')->with('success', 'QR Code updated successfully!');
}

}