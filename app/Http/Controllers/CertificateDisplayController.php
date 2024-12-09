<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;
use App\Models\DeathCertificateRequest;
use App\Models\MarriageCertificateRequest;
class CertificateDisplayController extends Controller
{
    // Live Birth
    public function directbirth()
    {
        $RequestData = BirthCertificateRequest::latest()->first();  // Get the latest record
        return view('page.forms.birthform', compact('RequestData'));  // Pass data to the view
    }
    public function showbirth()
    {
        $requestedCertificate = "Birth Certificate";
        return view('page.payment', compact('requestedCertificate'));
    }

    // Marriage 
    public function directmarriage()
    {
        $RequestData2 = MarriagecertificateRequest::latest()->first();  // Get the latest record
        return view('page.forms.marriageformcert', compact('RequestData2'));  // Pass data to the view
    }
    public function showmarriage()
    {
        $requestedCertificate = "Marriage Certificate";
        return view('page.payment', compact('requestedCertificate'));
    }

    // Death
    public function directdeath()
    {
        $RequestData3 = DeathcertificateRequest::latest()->first();  // Get the latest record
        return view('page.forms.deathformcert', compact('RequestData3'));  // Pass data to the view
    }
    public function showdeath()
    {
        $requestedCertificate = "Death Certificate";
        return view('page.payment', compact('requestedCertificate'));
    }
}
