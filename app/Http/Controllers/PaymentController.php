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

    // Delete the previous photo (if any) before replacing
    $latestPayment = Qrcode::latest()->first();
    if ($latestPayment && $latestPayment->photo) {
        $oldPhotoPath = public_path($latestPayment->photo);
        if (file_exists($oldPhotoPath)) {
            unlink($oldPhotoPath); // Remove old photo
        }
        $latestPayment->delete(); // Remove old database record
    }

    // Store new payment data
    Qrcode::create($requestData);

    return redirect('payment')->with('flash_message', 'Payment updated!');
}
}