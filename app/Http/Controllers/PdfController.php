<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf(){
   
    $userId = auth()->id();
    $requests = Forms::where('User_Id', $userId)->get();
    $data = [
        'title' => 'Note: This is Just a Sample Document of your Request',
        'date' => date('m/d/y'),
        'request' => $requests
    ];
    $pdf = Pdf::loadView('page.pdf.generatePDF', $data);
    return $pdf->download('Unsealed_Certificate.pdf');
}

}


/*
public function generatePdf(){

        $requests = Forms::get('User_Id', $userId)->get();

        $data = [
            'title' => 'Civil Registar Certificate',
            'date' => date('m/d/y'),
            'request' => $requests
        ];

        $pdf = Pdf::loadView('page.pdf.generatePDF', $data);
        return $pdf->download('Unsealed_Certificate.pdf');
    }
*/