<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forms;

class FormsController extends Controller
{
    public function displaydocument(){
      
        $document = Forms::all();

            return view('page.forms.transactionform', [
            'document' => $document, 
        ]);
    }

    public function showuserform($id){

        $userformaddress = Forms::findOrfail($id);
    
        return view('page.forms.showaddress', ['useraddress' => $userformaddress]);
    }

    public function createuserform(){

        return view('page.forms.creates');
    }
}
