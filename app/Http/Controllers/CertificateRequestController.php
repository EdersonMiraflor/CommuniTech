<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;

class CertificateRequestController extends Controller
{
    public function create()
    {
        return view('page.form102');
    }

    public function store(Request $request)
    {
        // Store the data directly in the database
        BirthCertificateRequest::create([
            'child_first_name' => $request->child_first_name,
            'child_middle_name' => $request->child_middle_name,
            'child_last_name' => $request->child_last_name,
            'child_sex' => $request->child_sex,
            'child_date_of_birth' => $request->child_date_of_birth,
            'child_place_of_birth' => $request->child_place_of_birth,
            'mother_first_name' => $request->mother_first_name,
            'mother_middle_name' => $request->mother_middle_name,
            'mother_last_name' => $request->mother_last_name,
            'mother_date_of_birth' => $request->mother_date_of_birth,
            'mother_citizenship' => $request->mother_citizenship,
            'mother_religion' => $request->mother_religion,
            'mother_occupation' => $request->mother_occupation,
            'mother_residence' => $request->mother_residence,
        ]);

        return redirect('/home/services/form102/birthform'); // Or another route to show success
    }
}
