<?php

namespace App\Http\Controllers;

use App\Models\DeliveryDetails;
use Illuminate\Http\Request;

class RiderDashboardController extends Controller
{
    /**
     * Show the rider dashboard with all delivery records.
     *
     * @return \Illuminate\View\View
     */
    public function showRiderDashboard()
    {
        // Fetch all delivery records
        $records = DeliveryDetails::all();

        // Pass the data to the view
        return view('rider_interface', compact('records'));
    }

    /**
     * Update the status of a delivery.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateDeliveryStatus(Request $request, $id)
{
    // Find the delivery record by ID
    $delivery = DeliveryDetails::findOrFail($id);

    // Update the status to 'completed'
    $delivery->status = 'completed';
    $delivery->save();

    // Redirect back to the dashboard with a success message
    return redirect()->route('rider.dashboard')->with('success', 'Delivery moved to history successfully!');
}

}
