<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactSection as Contact;
class ContactSection extends Component
{
    public function render()
    {
        $contactSection = Contact::first();
        return view('livewire.contact-section',['contactSection' => $contactSection]);
    }
}
