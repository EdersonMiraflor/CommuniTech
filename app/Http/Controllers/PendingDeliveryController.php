<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DeliveryDetails;

class PendingDeliveryController extends Controller
{
    public function showPendingDeliveries()
    {
        // Fetch pending delivery requests for the authenticated user
        $userId = Auth::id(); // Get the logged-in user's ID
        $pendingDeliveries = DeliveryDetails::where('User_Id', $userId)->where('status', 'pending')->get();

        // Pass data to the view
        return view('pending-deliveries', compact('pendingDeliveries'));
    }
}
