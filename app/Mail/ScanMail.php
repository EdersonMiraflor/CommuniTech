<?php
// app/Mail/ScanMail.php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class ScanMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $filePath;

    public function __construct($email, $filePath)
    {
        $this->email = $email;
        $this->filePath = $filePath;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Scan Form Submission',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'scanmail', // This should be the Blade view for the email content
        );
    }

    public function attachments(): array
    {
        // Attach the file if there's a file path
        return $this->filePath 
            ? [Attachment::fromPath(storage_path('app/public/' . $this->filePath))] 
            : [];
    }
}
