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
        // Fetch all transactions from the database
        $transactions = Transaction::all();
        
        // Return the view with the transactions data
        return view('page.report', ['transactions' => $transactions]);
        // Alternatively, you can still use compact:
        // return view('page.report', compact('transactions'));
    }
}
