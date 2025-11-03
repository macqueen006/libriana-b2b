<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        // Sanitize the name to prevent header injection
        $sanitizedData = [
            'fullname' => strip_tags($this->data['fullname']),
            'phone' => strip_tags($this->data['phone']),
            'email' => strip_tags($this->data['email']),
            'message' => strip_tags($this->data['message']),
        ];

        // Remove newlines from subject to prevent header injection
        $subject = preg_replace('/[\r\n\t]/', '', $sanitizedData['fullname']);

        $safeName = preg_replace('/[\r\n\t]/', '', $subject);
        return $this->subject('New Contact Form Submission from ' . $safeName)
            ->view('emails.contact-form')
            ->with('data', $sanitizedData);
    }
}
