<?php

namespace App\Livewire\Missing;

use Livewire\Component;
use App\Models\MissingPerson;

class MissingHomePage extends Component
{
    public $missingPeople;
    public $missingFoundPeople;

    public function mount()
    {
        // Fetch missing people data from the database
        $this->missingPeople = MissingPerson::where('status','missing')->select('poster', 'name','slug', 'nickname', 'age', 'status')->orderBy('created_at','asc')->get();
        $this->missingFoundPeople = MissingPerson::where('status','found')->select('poster','name','nickname','age','status')->orderBy('created_at','asc')->get();
    }

    public function render()
    {
        return view('livewire.missing.missing-home-page')->layout('layouts.app');
    }
}
