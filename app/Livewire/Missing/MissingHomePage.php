<?php

namespace App\Livewire\Missing;

use Livewire\Component;

class MissingHomePage extends Component
{
    public function render()
    {
        return view('livewire.missing.missing-home-page')->layout('layouts.app');
    }
}
