<?php

namespace App\Livewire\Admin\Maandamano;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\MaandamanoHero;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminMaandamanoHeroesAddPage extends Component
{
    use WithFileUploads;

    public $name, $alias, $dob, $dod, $birthplace, $place_of_death, $ethnicity, $county, $highschool, $uni, $occupation;
    public $cause, $contributions, $affiliations, $awards, $case_number, $religion, $residence, $quotes, $legacy, $death;
    public $memorial_location, $image, $documents = [], $eulogy;

    protected $rules = [
        'name' => 'required|string|max:255',
        'alias' => 'nullable|string|max:255',
        'dob' => 'nullable|date',
        'dod' => 'nullable|date',
        'birthplace' => 'nullable|string|max:255',
        'place_of_death' => 'nullable|string|max:255',
        'ethnicity' => 'nullable|string|max:255',
        'county' => 'nullable|string|max:255',
        'highschool' => 'nullable|string|max:255',
        'uni' => 'nullable|string|max:255',
        'occupation' => 'nullable|string|max:255',
        'cause' => 'nullable|string|max:255',
        'contributions' => 'nullable|string',
        'affiliations' => 'nullable|string|max:255',
        'awards' => 'nullable|string|max:255',
        'case_number' => 'nullable|string|max:255',
        'religion' => 'nullable|string|max:255',
        'residence' => 'nullable|string|max:255',
        'quotes' => 'nullable|string',
        'legacy' => 'nullable|string',
        'death' => 'nullable|string',
        'memorial_location' => 'nullable|string|max:255',
        'image' => 'nullable|image|max:2048',
        'documents.*' => 'nullable|file|max:4096',
        'eulogy' => 'nullable|string',
    ];

    public function saveHero()
    {
        if (!Auth::user() || !Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }

        $this->validate();

        $heroImagePath = $this->image ?  $this->image->store('poster/heroes','public'): null;

        $heroData = [
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'alias' => $this->alias,
            'dob' => $this->dob,
            'dod' => $this->dod,
            'birthplace' => $this->birthplace,
            'place_of_death' => $this->place_of_death,
            'ethnicity' => $this->ethnicity,
            'county' => $this->county,
            'highschool' => $this->highschool,
            'uni' => $this->uni,
            'occupation' => $this->occupation,
            'cause' => $this->cause,
            'contributions' => $this->contributions,
            'affiliations' => $this->affiliations,
            'awards' => $this->awards,
            'case_number' => $this->case_number,
            'religion' => $this->religion,
            'residence' => $this->residence,
            'quotes' => $this->quotes,
            'legacy' => $this->legacy,
            'death' => $this->death,
            'memorial_location' => $this->memorial_location,
            'eulogy' => $this->eulogy,
            'image' => $heroImagePath,
        ];



        if (!empty($this->documents)) {
            $heroData['documents'] = collect($this->documents)->map(fn($doc) => $doc->store('documents', 'public'))->toArray();
        }

        MaandamanoHero::create($heroData);

        session()->flash('message', 'Hero added successfully!');
        return redirect()->route('maandamano.heroes');
    }

    public function render()
    {
        return view('livewire.admin.maandamano.admin-maandamano-heroes-add-page')->layout('layouts.app');
    }
}
