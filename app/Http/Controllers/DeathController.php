<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeathController extends Controller
{
    public function registration()
    {
        return view('death.registration');  // Create this view file
    }

    public function certificate()
    {
        return view('death.certificate');  // Create this view file
    }

    public function receipt()
    {
        return view('death.receipt');  // Create this view file
    }
}
