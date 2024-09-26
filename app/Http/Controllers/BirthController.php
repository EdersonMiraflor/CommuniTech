<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthController extends Controller
{
    public function registration()
    {
        
        return view('forms.birthform');  
    }
}
