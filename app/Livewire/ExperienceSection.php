<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ExperienceSection as ExperienceSectionModel;

class ExperienceSection extends Component
{
    public function render()
    {
        $experienceSection = ExperienceSectionModel::first();

        return view('livewire.experience-section', ['experienceSection' => $experienceSection]);
    }
}
