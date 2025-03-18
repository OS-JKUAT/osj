<?php

namespace App\Livewire\Maandamano;

use Livewire\Component;
use App\Models\MaandamanoHero;

class MaandamanoHeroShow extends Component
{

    public $hero;

    public function mount($slug)
    {
        $this->hero = MaandamanoHero::where('slug', $slug)->with(['maandamanoHeroMedia', 'maandamanoHeroKin'])->firstOrFail();
    }


    public function render()
    {
        return view('livewire.maandamano.maandamano-hero-show')->layout('layouts.app');
    }
}
