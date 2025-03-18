<?php

namespace App\Livewire\Admin\Maandamano;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\MaandamanoHero;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminMaandamanoHeroesEditPage extends Component
{
    use WithFileUploads;

    public $hero;
    public $heroId;
    public $name, $slug, $alias, $dob, $dod, $birthplace, $place_of_death, $ethnicity, $county;
    public $highschool, $uni, $occupation, $cause, $contributions, $affiliations;
    public $awards, $case_number, $religion, $residence, $quotes, $legacy, $death;
    public $memorial_location, $image, $documents, $eulogy;
    public $newImage, $newDocuments;

    public function mount($heroId)
    {
        if (!Auth::user() || !Auth::user()->hasRole('admin')) {
            # code...
            abort(403,'Unauthorized action.');
        }

        $hero = MaandamanoHero::findOrFail($heroId);
        $this->heroId = $hero->id;
        $this->fill($hero->toArray());
        // $this->currentPhoto = $hero->image;
    }

    // Validation rules:
    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
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
            'eulogy' => 'nullable|',
        ];
    }

    public function updateHero()
    {
        if (!Auth::user() || !Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }

        $this->validate();

        // Find the hero
        $hero = MaandamanoHero::findOrFail($this->heroId);

        // Handle new image upload
        if ($this->image) {
            // Delete the old image if exists
            if ($hero->image) {
                \Storage::disk('public')->delete($hero->image);
            }
            $heroImagePath = $this->image->store('poster/heroes', 'public');
        } else {
            $heroImagePath = $hero->image; // Keep the existing image
        }

        // Prepare hero data
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

        // Handle documents update
        if (!empty($this->documents)) {
            // Delete old documents if necessary
            if ($hero->documents) {
                foreach ($hero->documents as $oldDoc) {
                    \Storage::disk('public')->delete($oldDoc);
                }
            }
            $heroData['documents'] = collect($this->documents)
                ->map(fn($doc) => $doc->store('documents', 'public'))
                ->toArray();
        }

        // dd($this->name, $this->alias, $this->dob); // Debugging example


        // Update the hero record
        $hero->update($heroData);

        session()->flash('message', 'Hero updated successfully!');
        return redirect()->route('maandamano.heroes');
    }


    public function render()
    {
        return view('livewire.admin.maandamano.admin-maandamano-heroes-edit-page')->layout('layouts.app');
    }
}
