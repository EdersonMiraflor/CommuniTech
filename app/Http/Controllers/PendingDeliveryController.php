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
        // Fetch logged-in user's name
        $userName = Auth::user()->name; 

        // Fetch delivery records based on user's name
        $pendingDeliveries = DeliveryDetails::where('name', $userName)->get();

        // Pass data to the view
        return view('pending-deliveries', compact('pendingDeliveries'));
    }
}