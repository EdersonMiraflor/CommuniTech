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
        $qrscan = Qrcode::latest()->first(); 
        return view('page.payment', compact('qrscan'));
    }
    
    public function create()
    {
        $qrscan = Qrcode::latest()->first(); 
        return view('page.payment', compact('qrscan'));
    }
    
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Handle file upload for the new photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/uploads/qrcode', $filename); // Save in storage/app/public/uploads/qrcode
            
            // Create a new QR code record
            $qrscan = new Qrcode();
            $qrscan->photo = $filename;
            $qrscan->save(); // Save the new QR code record
        }
    
        // Redirect back with a success message
        return redirect()->route('payment.create')->with('success', 'QR Code uploaded successfully!');
    }
    

}