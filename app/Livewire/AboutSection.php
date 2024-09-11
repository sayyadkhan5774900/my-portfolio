<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AboutSection as About;

class AboutSection extends Component
{
    public function render()
    {
        $about = About::where('status', true)->first();

        return view('livewire.about-section', ['about' => $about]);
    }
}
