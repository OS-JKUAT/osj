<?php

namespace App\Livewire\Missing;

use Livewire\Component;
use App\Models\MissingPerson;

class MissingPersonDetailPage extends Component
{
    public $person;

    public function mount($slug)
    {
        $this->person = MissingPerson::where('slug',$slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.missing.missing-person-detail-page')->layout('layouts.app');
    }
}
