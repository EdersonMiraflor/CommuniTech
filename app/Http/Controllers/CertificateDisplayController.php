<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;

class CertificateDisplayController extends Controller
{
      // Fetches the latest birth certificate request data and passes it to the view
      public function directbirth()
      {
          $RequestData = BirthCertificateRequest::latest()->first();  // Get the latest record
          return view('page.forms.birthform', compact('RequestData'));  // Pass data to the view
      }
      public function showbirth()
      {
          return view('page.payment');
      }
}
