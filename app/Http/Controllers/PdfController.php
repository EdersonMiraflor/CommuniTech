<?php

namespace App\Http\Controllers;

use App\Models\BirthCertificateRequest;
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

/*   
public function generatePdf(){
   
    $userId = auth()->id();
    $requests = BirthCertificateRequest::where('id', $userId)->get();
    $data = [
        'request' => $requests,
    ];
    $pdf = Pdf::loadView('page.pdf.generatePDF', $data);
    return $pdf->download('Unsealed_Certificate.pdf');
*/