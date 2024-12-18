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
        $category = $request->input('category');
        $search = $request->input('search');
        $records = [];
    
        // Dynamically select the model and search the database
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
                $records = [];
                break;
        }
    
        return view('displayRecords', [
            'records' => $records,
            'category' => $category,
            'search' => $search
        ]);
    }
}
