<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use DB;

class CertificateController extends Controller
{
    // Method to show aggregated certificate data
    public function showTransactions()
    {
        // Fetch ongoing transactions, group by Cert_Type, and sum quantities
        $certificates = Transaction::where('progress', 'Ongoing')
            ->select('Cert_Type', DB::raw('SUM(Quantity) as total_quantity'))
            ->groupBy('Cert_Type')
            ->get();

        // Fetch and count appointments by day of the week
        $appointments = Transaction::select(DB::raw("DAYNAME(Pick_Up_Date) as Appointment_Day"), DB::raw("COUNT(*) as Appointment_Count"))
            ->groupBy('Appointment_Day')
            ->orderByRaw("FIELD(Appointment_Day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday')")
            ->get();

        // Format appointments data for the chart
        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $appointmentsData = [];
        foreach ($daysOfWeek as $day) {
            $count = $appointments->firstWhere('Appointment_Day', $day)->Appointment_Count ?? 0;
            $appointmentsData[] = [$day, $count];
        }

        // Return the view with both certificates and formatted appointments data
        return view('page.report', [
            'certificates' => $certificates,
            'appointmentsData' => json_encode($appointmentsData) // Pass JSON-encoded data for JavaScript
        ]);
    }
}
