<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Store a new contact inquiry.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'Email_Address' => 'required|email|max:255',
            'Query' => 'required|string|max:1000',
        ]);

        try {
            // Create a new contact inquiry
            $contact = new Contact();
            $contact->User_Id = auth()->id(); // Get the authenticated user's ID
            $contact->First_Name = $validatedData['First_Name'];
            $contact->Last_Name = $validatedData['Last_Name'];
            $contact->Email_Address = $validatedData['Email_Address'];
            $contact->Query = $validatedData['Query'];
            $contact->save();

            // Prepare email data
            $emailData = [
                'name' => $validatedData['First_Name'] . ' ' . $validatedData['Last_Name'],
                'email' => $validatedData['Email_Address'],
                'message' => $validatedData['Query'],
            ];

            // Send email notification
            Mail::to('communitech4@gmail.com')->send(new ContactMail($emailData));

            return redirect('/home')->with('msg', 'Inquiries Sent Successfully');
        } catch (\Exception $e) {
            // Handle errors
            return redirect()->back()->withErrors(['error' => 'An error occurred while sending your inquiry. Please try again.']);
        }
    }
}