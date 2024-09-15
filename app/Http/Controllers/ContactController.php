<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //User the Elements in the model Account, and store it in a variable then save it basse on the variable from the views
    public function store()
    {
        $userId = auth()->id();
        //Access Model to store the input from the views, to the database
        $contact = new Contact();
     
        //Store View input to database attribute, and store it in the model 
        $contact->User_Id = $userId;
        $contact->First_Name = request('First_Name');
        $contact->Last_Name = request('Last_Name');
        $contact->Email_Address = request('Email_Address');
        $contact->Query = request('Query');

        $contact->save();

                // Prepare email data
                $emailData = [
                'name' => request('First_Name') . ' ' . request('Last_Name'),
                'email' => request('Email_Address'),
                'message' => request('Query'),
                ];

                // Send email
                Mail::to('miraflorederson@gmail.com')->send(new ContactMail($emailData));

       return redirect('/home')->with('msg', 'Inquiries Sent Successfully');
    }

/*
            $table->id('Inquire_No');
            $table->unsignedBigInteger('User_Id');
            $table->string('First_Name', 255);
            $table->string('Last_Name', 255);
            $table->string('Email_Address', 255);
            $table->text('Query');
            $table->timestamps();
            
            $table->foreign('User_Id')->references('User_Id')->on('users');
*/
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