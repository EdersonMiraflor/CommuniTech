<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthController extends Controller
{
    public function registration()
    {
        return view('birth.registration');  // Create this view file
    }

    public function certificate()
    {
        return view('birth.certificate');  // Create this view file
    }

    public function receipt()
    {
        return view('birth.receipt');  // Create this view file
    }
}
