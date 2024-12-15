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
        $qrcode = Qrcode::all();
        $qrscan = Qrcode::where('User_Id', Auth::id())->get(); // Fetch QR codes related to the logged-in user
        return view('page.payment', compact('qrcode', 'qrscan'));
    }
    
    public function create()
    {
        $qrcode = Qrcode::all();
        $qrscan = Qrcode::where('User_Id', Auth::id())->get(); // Fetch QR codes related to the logged-in user
        return view('page.payment', compact('qrcode', 'qrscan'));
    }
    
    
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Add authenticated user's ID to the data
        $userId = Auth::id(); // Get the authenticated user's ID
        $requestData['User_Id'] = $userId;
        
        // Create a new qr instance
        $qrscan = new Qrcode;
        // Handle the profile image upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/uploads/qrcode', $filename); // Save in storage/app/public/uploads/qrcode
            $qrscan->photo = $filename;
        }
        
        // Save the student data
        $qrscan->save();

        // Redirect back with a success message
        return redirect()->route('payment.create');
    }
}