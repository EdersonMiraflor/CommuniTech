<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BirthCertificateRequest;
use App\Models\DeathCertificateRequest;
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

        // Fetches the latest birth certificate request data and passes it to the view
        public function directdeath()
        {
            $RequestData3 = DeathcertificateRequest::latest()->first();  // Get the latest record
            return view('page.forms.deathformcert', compact('RequestData3'));  // Pass data to the view
        }
        public function showdeath()
        {
            return view('page.payment');
        }
}
