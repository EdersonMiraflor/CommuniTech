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
        $pay = Qrcode::all();
        return view('page.payment')->with('qrscan', $pay);
    }

    public function create()
    {
        return view('page.create');
    }

    public function store(Request $request)
{
    $requestData = $request->all();

    // Add authenticated user's ID to the data
    $userId = Auth::id(); // Get the authenticated user's ID
    $requestData['User_Id'] = $userId;

    // Check if a photo has been uploaded
    if (!$request->hasFile('photo')) {
        return redirect()->back()->with('error_message', 'No uploaded image, can\'t change');
    }

    // Handle photo upload
    $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->storeAs('images', $fileName, 'public');
    $requestData['photo'] = '/storage/' . $path;

    // Retrieve the existing record or create a new one
    $qrcode = Qrcode::firstOrCreate(['User_Id' => $userId]);

    // Delete the previous photo (if any)
    if ($qrcode->photo && file_exists(public_path($qrcode->photo))) {
        unlink(public_path($qrcode->photo)); // Remove old photo
    }

    // Update the QR code record with the new photo
    $qrcode->update(['photo' => $requestData['photo']]);

    return redirect('payment')->with('flash_message', 'QR Code updated successfully!');
}
}