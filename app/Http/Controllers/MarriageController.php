<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarriageController extends Controller
{
    public function registration()
    {
        return view('marriage.registration');  // Create this view file
    }

    public function certificate()
    {
        return view('marriage.certificate');  // Create this view file
    }

    public function receipt()
    {
        return view('marriage.receipt');  // Create this view file
    }
}
