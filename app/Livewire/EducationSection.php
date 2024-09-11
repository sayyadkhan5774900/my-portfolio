<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\EducationSection as Education;
class EducationSection extends Component
{
    public function render()
    {
        $educationSection = Education::first();
        return view('livewire.education-section', compact('educationSection'));
    }
}
