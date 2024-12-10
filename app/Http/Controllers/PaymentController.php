<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $pay = Payment::all();
        return view('page.payment')->with('payments', $pay);
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

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $fileName, 'public');
            $requestData['photo'] = '/storage/' . $path;

            // Delete the previous photo (if any) before replacing
            $latestPayment = Payment::latest()->first();
            if ($latestPayment && $latestPayment->photo) {
                $oldPhotoPath = public_path($latestPayment->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath); // Remove old photo
                }
                $latestPayment->delete(); // Remove old database record
            }
        }

        // Store new payment data
        Payment::create($requestData);

        return redirect('payment')->with('flash_message', 'Payment updated!');
    }
}
