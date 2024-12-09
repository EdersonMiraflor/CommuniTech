<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index(){
    
        $pay = Payment::all();
        return view ('page.payment')->with('payments', $pay);
}

public function create(){
    return view('page.create'); 
}

public function store(Request $request){
    $requestData = $request->all();
    $fileName = time().$request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->storeAs('images', $fileName, 'public');
    $requestData["photo"] = '/storage/'.$path;
    Payment::create($requestData);

    return redirect('payment')->with('flash_message', 'Payment Addedd!'); 
}
}
