<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    //User the Elements in the model Account, and store it in a variable then save it basse on the variable from the views
    public function store()
    {
        //Access Model to store the input from the views, to the database
        $user_account = new Account();
        //Store View input to database attribute, and store it in the model
        $user_account->id = request('id');
        $user_account->last_name = request('last_name');
        $user_account->first_name = request('first_name');
        $user_account->middle_name = request('middle_name');
        $user_account->extension_name = request('extension_name');
        $user_account->month = request('month');
        $user_account->year = request('year');
        $user_account->month = request('month');
        $user_account->day = request('day');
        $user_account->mobile_number = request('mobile_number');
        $user_account->email_address = request('email_address');
        $user_account->password = request('password');
        $user_account->house_no = request('house_no');
        $user_account->zone = request('zone');
        $user_account->barangay = request('barangay');

       $user_account->save();

       return redirect('/home')->with('msg', 'Account Created Successfully');
    }


    public function login(Request $request)
    {
        // Get the email and password from the request
        $email = $request->input('email'); 
        $password = $request->input('password');
        
        // Check if the user exists with the provided email
        $user = Account::where('email_address', $email)->first();
    
        // If the user does not exist and password is provided
        if (!$user) {
            return back()->withErrors(['email' => 'Email does not exist.'])->withInput();
        } 
        // If user exists but the password is incorrect
        elseif ($password !== $user->password) {
            return back()->withErrors(['password' => 'Password is incorrect.'])->withInput();
        }
        // If both email and password are correct
        else {
            return redirect('/home')->with('msg2', 'Login Successful'); // Password matches, redirect to home
        }
    }

    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find the user by email
        $user = Account::where('email_address', $request->input('email'))->first();

        if ($user) {
            // Update the user's password
            $user->password = $request->input('password');
            $user->save();

            // Redirect to a success page or back to the login page
            return redirect('/login')->with('msg3', 'Password updated successfully.');
        } else {
            // If the email does not exist, return an error
            return back()->withErrors(['email' => 'This email does not exist in our records.'])->withInput();
        }
    }
}