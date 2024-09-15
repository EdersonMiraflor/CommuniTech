<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailData;

    public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }
    public function build()
{
    return $this->from($this->emailData['email']) // the 'from' will be the user’s email
                ->subject('New Contact Inquiry')
                ->view('contact_mail')  // updated view for the email template
                ->with('emailData', $this->emailData);
}    
}