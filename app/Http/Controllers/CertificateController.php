<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use DB;

class CertificateController extends Controller
{
    // Function to display the report page with chart data
    public function showReport(){
        // Query to retrieve total quantities of certificates issued, filtering for ongoing transactions
        $certificates = Transaction::where('progress', 'Ongoing') // Filter transactions with 'Ongoing' status
            ->select('Cert_Type', DB::raw('SUM(Quantity) as total_quantity')) // Sum the quantity of each certificate type
            ->groupBy('Cert_Type') // Group the results by certificate type
            ->get();

        // Initialize an array to store the counts of appointments for each certificate type by day of the week
        $lineChartData = [
            'Birth Certificate' => [0, 0, 0, 0, 0], // Count for each day of the week (Monday to Friday)
            'Marriage Certificate' => [0, 0, 0, 0, 0],
            'Death Certificate' => [0, 0, 0, 0, 0],
        ];

        // Create a mapping of weekdays to indices for easy data entry into the line chart data array
        $daysMapping = [
            'Monday' => 0,
            'Tuesday' => 1,
            'Wednesday' => 2,
            'Thursday' => 3,
            'Friday' => 4,
        ];

        // Query to count the number of appointments for each day of the week by certificate type
        $appointments = Transaction::where('progress', 'Ongoing') // Filter for ongoing transactions
            ->whereIn('User_Appointment', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']) // Filter to include only weekdays
            ->select('User_Appointment', 'Cert_Type', DB::raw('COUNT(*) as count')) // Count appointments by type and day
            ->groupBy('User_Appointment', 'Cert_Type') // Group results by day and certificate type
            ->get();

        // Populate the line chart data array with counts from the appointments query results
        foreach ($appointments as $appointment) {
            $dayIndex = $daysMapping[$appointment->User_Appointment]; // Use the mapping to find the index for the day
            $lineChartData[$appointment->Cert_Type][$dayIndex] = $appointment->count; // Set the count in the corresponding day's index
        }

        // Pass the retrieved data to the view for rendering the charts
        return view('page.report', [
            'certificates' => $certificates, // Data for the pie chart
            'lineChartData' => $lineChartData, // Data for the line chart
        ]);
    }


    public function showUserProfile(){
    // Query to retrieve total quantities of certificates issued, filtering for ongoing transactions
    $certificates = Transaction::where('progress', 'Ongoing') // Filter transactions with 'Ongoing' status
        ->select('Cert_Type', DB::raw('SUM(Quantity) as total_quantity')) // Sum the quantity of each certificate type
        ->groupBy('Cert_Type') // Group the results by certificate type
        ->get();

    // Initialize an array to store the counts of appointments for each certificate type by day of the week
    $lineChartData = [
        'Birth Certificate' => [0, 0, 0, 0, 0], // Count for each day of the week (Monday to Friday)
        'Marriage Certificate' => [0, 0, 0, 0, 0],
        'Death Certificate' => [0, 0, 0, 0, 0],
    ];

    // Create a mapping of weekdays to indices for easy data entry into the line chart data array
    $daysMapping = [
        'Monday' => 0,
        'Tuesday' => 1,
        'Wednesday' => 2,
        'Thursday' => 3,
        'Friday' => 4,
    ];

    // Query to count the number of appointments for each day of the week by certificate type
    $appointments = Transaction::where('progress', 'Ongoing') // Filter for ongoing transactions
        ->whereIn('User_Appointment', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']) // Filter to include only weekdays
        ->select('User_Appointment', 'Cert_Type', DB::raw('COUNT(*) as count')) // Count appointments by type and day
        ->groupBy('User_Appointment', 'Cert_Type') // Group results by day and certificate type
        ->get();

    // Populate the line chart data array with counts from the appointments query results
    foreach ($appointments as $appointment) {
        $dayIndex = $daysMapping[$appointment->User_Appointment]; // Use the mapping to find the index for the day
        $lineChartData[$appointment->Cert_Type][$dayIndex] = $appointment->count; // Set the count in the corresponding day's index
    }

    // Pass the retrieved data to the view for rendering the charts
    return view('page.user-profile', [
        'certificates' => $certificates, // Data for the pie chart
        'lineChartData' => $lineChartData, // Data for the line chart
    ]);
}

}
