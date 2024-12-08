<?php

namespace App\Http\Controllers;

use App\Models\BirthCertificateRequest;
use App\Models\MarriageCertificateRequest;
use App\Models\DeathCertificateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf(){
    
    $userId = auth()->id();
    $request = BirthCertificateRequest::where('User_Id', $userId)->latest()->first();
    $data = [
        'requests' => $request,
    ];
    $pdf = Pdf::loadView('page.pdf.generatePDF', $data);
    return $pdf->download('Unsealed_Certificate.pdf');
    }
}
