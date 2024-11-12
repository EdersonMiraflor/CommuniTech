<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forms;

class FormsController extends Controller
{
/*TRANSACTION HISTORY 3
Explanation:
    -Use the model Forms and store it in the variable $document
    -Now the document here is the variable made in the views, while the $document is the variable for the model
 */ 
    public function displaydocument(){
      
        $document = Forms::all();

        return view('page.forms.transactionform', [
        'document' => $document, 
        ]);
    }
/*USER FORM ADDRESS 3
    -Use the model Forms and store it in the variable $userformaddress
    -Now the useraddress here is the variable made in the views, while the userformaddress is the variable for the model
    -The variable $id in the function look at the primary key in the table in database, to determine what record should be shown
*/
    public function showuserform($id){

        $userformaddress = Forms::findOrfail($id);
    
        return view('page.forms.showaddress', ['useraddress' => $userformaddress]);
    }

    public function createuserform(){

        return view('page.forms.creates');
    }
}
