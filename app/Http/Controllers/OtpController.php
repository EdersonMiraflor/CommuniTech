<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Otpform;
use App\Models\Verifytoken;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OtpController extends Controller
{ 
    // Validator method (no changes needed here)
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Name' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255'],
        ]);
    }

/*Sending OTP Code with OTP Form 3
  Explanation: 
    -Use the model "Otpform" and put the form inputs to the table in database
    -Use the model "Verifytoken", it generate a token then insert the input in the table "Verifytoken" in the database
    -Base on the inputed Email in the form, the otp code will be send there and then that code will be use to the OTP Form
    -After that, it will direct to verify-account page(url) and do the controller OtpHomeController
 */

    // Updated create method to accept Request
    protected function create(Request $request)
    {
        // Validate the request data
        $validated = $this->validator($request->all());

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        // Create OTPform record
        $otpforms = Otpform::create([
            'name' => $request->input('Name'),
            'email' => $request->input('Email'),
        ]);

        // Generate a valid token
        $validToken = rand(10, 100) . '2022';

        // Create Verifytoken record
        $get_token = new Verifytoken();
        $get_token->token = $validToken;
        $get_token->email = $request->input('Email');
        $get_token->save();

        // Get user details for sending email
        $get_user_email = $request->input('Email');
        $get_user_name = $request->input('Name');

        // Send email
        Mail::to($get_user_email)->send(new WelcomeMail($get_user_email, $validToken, $get_user_name));

        return redirect('/verify-account')->with('message', 'Please Check your email for OTP Code');

    }
}
