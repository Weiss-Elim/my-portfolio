<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactForm extends Component
{
    #[Validate('required|min:2')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('nullable|max:50')]
    public $subject = '';

    #[Validate('required|min:10')]
    public $message = '';

    public $successMessage = '';

    public function submit()
    {
        $this->validate();

        // In a real application, you would send an email or save to database
        // For now, we'll just show a success message
        
        $this->successMessage = "Thank you for reaching out, {$this->name}! I'll get back to you soon at {$this->email}.";
        
        // Reset form
        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
