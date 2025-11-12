<?php

namespace App\Livewire;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
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

    public $honeypot = '';

    protected $rules = [
        'fullname' => 'required|string|max:255',
        'phone' => 'required|string|max:20|regex:/^[0-9\s\-\+\(\)]+$/',
        'email' => 'required|email:rfc,dns|max:255',
        'message' => 'required|string|max:5000',
        'honeypot' => 'max:0',
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
        // Only validate fields that use wire:model.blur
        if (in_array($propertyName, ['fullname', 'phone', 'email'])) {
            $this->validateOnly($propertyName);
        }
    }

    public function submit(): void
    {
        // Honeypot spam check - silently reject bots
        if (!empty($this->honeypot)) {
            $this->reset(['fullname', 'phone', 'email', 'message']);
            return;
        }

        // Rate limiting: 3 submissions per 10 minutes per IP
        $executed = RateLimiter::attempt(
            'contact-form:' . request()->ip(),
            3, // max attempts
            function() {
                $validated = $this->validate();
                // Send email (blocking, but that's OK for small traffic)
                try {
                    Mail::to('support@librana.ai')->send(new ContactFormMail($validated));
                } catch (\Exception $e) {
                    // Log error but don't show to user
                    \Log::error('Contact form email failed: ' . $e->getMessage());

                    throw ValidationException::withMessages([
                        'email' => 'Unable to send message. Please try again later or email us directly at support@librana.ai',
                    ]);
                }

                $this->reset(['fullname', 'phone', 'email', 'message']);
                $this->successMessage = 'Message sent! We\'ll be in touch.';

                // Auto-clear message after 5 seconds
                $this->dispatch('message-sent');
            },
            600 // 10 minutes in seconds
        );

        if (!$executed) {
            throw ValidationException::withMessages([
                'email' => 'Too many submission attempts. Please try again in 10 minutes.',
            ]);
        }
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
