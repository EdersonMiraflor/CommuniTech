<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class CertificateController extends Controller
{
   // Method to show all transactions
   public function showTransactions()
   {
       // Fetch ongoing transactions, group by Transaction_Id, and sum quantities
       $transactions = Transaction::where('Progress', 'Ongoing')
           ->select('Transaction_Id', \DB::raw('SUM(Quantity) as total_quantity'))
           ->groupBy('Transaction_Id')
           ->get();

       // Return the view with the aggregated transactions data
       return view('page.report', ['transactions' => $transactions]);
   }
}
