<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\WorkSection as WorkSectionModel;

class WorkSection extends Component
{
    public function render()
    {
        $workSection = WorkSectionModel::first();

        return view('livewire.work-section', ['workSection' => $workSection]);
    }
}
