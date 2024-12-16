<?php
// app/Http/Controllers/EmailFileSendingController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ScanMail;
use Illuminate\Support\Facades\Mail;

class EmailFileSendingController extends Controller
{
    public function sendFileEmail(Request $request)
    {
        // Validate the email and file
        $request->validate([
            'Email' => 'required|email',
            'File' => 'required|file|max:2048', // limit file size to 2MB
        ]);

        // Retrieve the email and file from the request
        $email = $request->input('Email');
        $file = $request->file('File');
        
        // Store the file in the 'public/uploads' directory
        $filePath = $file->store('uploads', 'public');
        
        // Send the email with the file attachment
        Mail::to($email)->send(new ScanMail($email, $filePath));

        // Return a response
        return back()->with('success', 'Email sent successfully with attachment!');
    }
}
