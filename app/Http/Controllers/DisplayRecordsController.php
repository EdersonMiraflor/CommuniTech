<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;
use App\Models\MarriageCertificateRequest;
use App\Models\DeathCertificateRequest;

class DisplayRecordsController extends Controller
{
    public function index()
    {
        // Show an empty table initially
        return view('displayRecords', ['records' => [], 'category' => null, 'search' => null]);
    }

    public function search(Request $request)
    {
        $category = $request->input('category'); // Selected category from dropdown
        $search = $request->input('search'); // Search keyword entered by admin
        $records = [];

        // Fetch data based on selected category
        switch ($category) {
            case '1': // Birth Certificate
                $records = BirthCertificateRequest::where('user_name', 'LIKE', "%$search%")
                    ->get();
                break;

            case '2': // Marriage Certificate
                $records = MarriageCertificateRequest::where('user_name', 'LIKE', "%$search%")
                    ->get();
                break;

            case '3': // Death Certificate
                $records = DeathCertificateRequest::where('user_name', 'LIKE', "%$search%")
                    ->get();
                break;

            default:
                // If no valid category is selected, return an empty result
                $records = [];
                break;
        }

        // Pass the data back to the view
        return view('displayRecords', [
            'records' => $records,
            'category' => $category,
            'search' => $search
        ]);
    }
}
