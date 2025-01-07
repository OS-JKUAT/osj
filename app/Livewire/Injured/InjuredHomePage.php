<?php

namespace App\Livewire\Injured;

use Livewire\Component;

class InjuredHomePage extends Component
{
    public function render()
    {
        return view('livewire.injured.injured-home-page')->layout('layouts.app');
    }
}
