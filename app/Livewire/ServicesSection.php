<?php

namespace App\Livewire;

use App\Models\ServiceSection as Service;
use Livewire\Component;

class ServicesSection extends Component
{
    public function render()
    {
        $serviceSection = Service::first();
        return view('livewire.services-section', ['serviceSection' => $serviceSection]);
    }
}
