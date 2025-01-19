<?php

namespace App\Livewire\Missing;

use Livewire\Component;
use App\Models\MissingPerson;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class MissingHomePage extends Component
{
    public $missingPeople;
    public $missingFoundPeople;
    protected $listeners = ['deletePerson'];

    public function deletePerson($id)
    {
        $this->destroy($id);
    }

    public function destroy($id)
    {
        if (!Auth::user() || !Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }

        $missingPerson = MissingPerson::find($id);

        if ($missingPerson) {
            if ($missingPerson->poster && Storage::exists('public/poster/' . $missingPerson->poster)) {
                Storage::delete('public/poster/' . $missingPerson->poster);
            }

            $missingPerson->delete();

            session()->flash('success', 'Missing person deleted successfully');
            $this->mount(); // Refresh data
        } else {
            session()->flash('error', 'Missing person not found');
        }
    }

    public function mount()
    {
        // Fetch missing people data from the database
        $this->missingPeople = MissingPerson::where('status','missing')->select('id','poster', 'name','slug', 'nickname', 'age', 'status')->orderBy('created_at','desc')->get();
        $this->missingFoundPeople = MissingPerson::where('status','found')->select('id','poster','name','slug','nickname','age','status')->orderBy('created_at','desc')->get();
    }

    public function render()
    {
        return view('livewire.missing.missing-home-page')->layout('layouts.app');
    }
}
