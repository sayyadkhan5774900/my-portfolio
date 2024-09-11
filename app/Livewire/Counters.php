<?php

namespace App\Livewire;

use App\Models\CounterSection;
use Livewire\Component;

class Counters extends Component
{
    public function render()
    {
        $counterSection = CounterSection::first();
        return view('livewire.counters', ['counterSection' => $counterSection]);
    }
}
