<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactForm extends Component
{
    public $fullname = '';
    public $phone = '';
    public $email = '';
    public $message = '';
    public $successMessage = '';

    protected $rules = [
        'fullname' => 'required|string|max:255',
        'phone' => 'required|string|max:20|regex:/^[0-9\s\-\+\(\)]+$/',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:5000',
    ];

    protected $messages = [
        'fullname.required' => 'Please enter your full name.',
        'phone.regex' => 'Please enter a valid phone number.',
        'phone.required' => 'Please enter a phone number.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'message.required' => 'Please enter your message.',
    ];

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function submit(): void
    {
        $validated = $this->validate();

        // Send email
        Mail::to('your-email@example.com')->send(new ContactFormMail($validated));

        // Reset form
        $this->reset(['fullname', 'phone', 'email', 'message']);

        $this->successMessage = 'Thank you for contacting us! We will get back to you soon.';
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
