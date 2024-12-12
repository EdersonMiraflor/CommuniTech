<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;
use App\Models\DeathCertificateRequest;
use App\Models\MarriageCertificateRequest;
use App\Models\payment;

class CertificateDisplayController extends Controller
{
    // Live Birth
    public function directBirth()
    {
        $RequestData = BirthCertificateRequest::latest()->first();  
        return view('page.forms.birthform', compact('RequestData'));
    }

    public function showBirth()
    {
        $requestedCertificate = "Birth Certificate";
        $payments = payment::all();
        return view('page.payment', compact('requestedCertificate', 'payments')); 
    }

    // Marriage
    public function directMarriage()
    {
        $RequestData = MarriageCertificateRequest::latest()->first();  
        return view('page.forms.marriageformcert', compact('RequestData'));
    }

    public function showMarriage()
    {
        $requestedCertificate = "Marriage Certificate";
        $payments = payment::all();
        return view('page.payment', compact('requestedCertificate', 'payments'));
    }

    // Death
    public function directDeath()
    {
        $RequestData = DeathCertificateRequest::latest()->first();  
        return view('page.forms.deathformcert', compact('RequestData'));
    }

    public function showDeath()
    {
        $requestedCertificate = "Death Certificate";
        $payments = payment::all();
        return view('page.payment', compact('requestedCertificate', 'payments'));
    }
}
