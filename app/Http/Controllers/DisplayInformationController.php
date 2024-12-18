<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeathCertificateRequest; // Adjust the model name if different.

class DisplayInformationController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query'); // The input field name is 'query'.

        $results = DeathCertificateRequest::where('full_name', 'LIKE', '%' . $query . '%')
            ->orWhere('deceased_name', 'LIKE', '%' . $query . '%')
            ->get();

        return response()->json($results);
    }
}
