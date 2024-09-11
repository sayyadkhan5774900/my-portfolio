<?php

namespace App\Livewire;

use App\Models\SkillSection;
use Livewire\Component;

class SkillsSection extends Component
{
    public function render()
    {
        $skillSection = SkillSection::first();
        return view('livewire.skills-section', ['skillSection' => $skillSection]);
    }
}
