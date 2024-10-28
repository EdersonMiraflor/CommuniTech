<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use DB;

class CertificateController extends Controller
{
    // Function to display the report page with chart data
    public function showReport()
    {
        // Query to get total certificates issued (for pie chart data)
        $certificates = Transaction::where('progress', 'Ongoing') // Filter transactions with 'Ongoing' status
            ->select('Cert_Type', DB::raw('SUM(Quantity) as total_quantity')) // Sum quantities by certificate type
            ->groupBy('Cert_Type') // Group results by certificate type
            ->get();

        // Initialize data array for line chart (appointments per day for each certificate type)
        $lineChartData = [
            'Birth Certificate' => [0, 0, 0, 0, 0], // Each day of the week (Monday to Friday)
            'Marriage Certificate' => [0, 0, 0, 0, 0],
            'Death Certificate' => [0, 0, 0, 0, 0],
        ];

        // Mapping weekdays to indices for easy data entry
        $daysMapping = [
            'Monday' => 0,
            'Tuesday' => 1,
            'Wednesday' => 2,
            'Thursday' => 3,
            'Friday' => 4,
        ];

        // Query to count appointments for each day by certificate type
        $appointments = Transaction::where('progress', 'Ongoing') // Filter by ongoing transactions
            ->whereIn('User_Appointment', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']) // Filter for weekdays only
            ->select('User_Appointment', 'Cert_Type', DB::raw('COUNT(*) as count')) // Count appointments per type and day
            ->groupBy('User_Appointment', 'Cert_Type') // Group by weekday and certificate type
            ->get();

        // Populate line chart data with the actual counts from the query results
        foreach ($appointments as $appointment) {
            $dayIndex = $daysMapping[$appointment->User_Appointment]; // Map day to array index
            $lineChartData[$appointment->Cert_Type][$dayIndex] = $appointment->count; // Set count in corresponding day
        }

        // Pass data to the view for rendering charts
        return view('page.report', [
            'certificates' => $certificates, // Data for pie chart
            'lineChartData' => $lineChartData, // Data for line chart
        ]);
    }
}
