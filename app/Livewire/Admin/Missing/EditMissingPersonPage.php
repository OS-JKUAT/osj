<?php

namespace App\Livewire\Admin\Missing;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\MissingPerson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EditMissingPersonPage extends Component
{
    use WithFileUploads;

    public $missingPersonId;
    public $name, $nickname, $age, $gender, $hair, $eyes, $hashtag, $language, $citizenship;
    public $poster, $last_seen_location, $place_of_birth, $date_last_seen, $dob;
    public $suspicion, $description, $reporter_name, $reporter_contact, $status, $status_description;
    public $currentPoster;

    /**
     * Mount method checks if the user has admin privileges and loads the data.
     */
    public function mount($id)
    {
        if (!Auth::user() || !Auth::user()->hasRole(['admin','missing_person_admin'])) {
            abort(403, 'Unauthorized action.');
        }

        $missingPerson = MissingPerson::findOrFail($id);
        $this->missingPersonId = $missingPerson->id;
        $this->fill($missingPerson->toArray());
        $this->currentPoster = $missingPerson->poster;
    }

    /**
     * Validation rules for the form.
     */
    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'nickname' => 'nullable|string|max:255',
            'age' => 'nullable|integer|min:0|max:120',
            'gender' => 'nullable|string|max:20',
            'hair' => 'nullable|string|max:255',
            'eyes' => 'nullable|string|max:255',
            'hashtag' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'citizenship' => 'nullable|string|max:255',
            'poster' => 'nullable|max:2048', // 2MB max
            'last_seen_location' => 'nullable|string|max:255',
            'place_of_birth' => 'nullable|string|max:255',
            'date_last_seen' => 'nullable|date',
            'dob' => 'nullable|date',
            'suspicion' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'reporter_name' => 'required|string|max:255',
            'reporter_contact' => 'required|string|max:255',
            'status' => 'required|string|in:missing,found',
            'status_description' => 'nullable|string|max:255',
        ];
    }

    /**
     * Save the updated missing person record to the database.
     */
    public function submit()
    {
        $this->validate();

        $missingPerson = MissingPerson::findOrFail($this->missingPersonId);

        // Handle poster upload or fallback to the existing poster
        $posterPath = $this->poster && $this->poster instanceof \Illuminate\Http\UploadedFile
            ? $this->poster->store('poster', 'public')
            : $missingPerson->poster;

        $missingPerson->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name . '-' . now()->timestamp),
            'nickname' => $this->nickname,
            'age' => $this->age,
            'gender' => $this->gender,
            'hair' => $this->hair,
            'eyes' => $this->eyes,
            'hashtag' => $this->hashtag,
            'language' => $this->language,
            'citizenship' => $this->citizenship,
            'poster' => $posterPath,
            'last_seen_location' => $this->last_seen_location,
            'place_of_birth' => $this->place_of_birth,
            'date_last_seen' => $this->date_last_seen,
            'dob' => $this->dob,
            'suspicion' => $this->suspicion,
            'description' => $this->description,
            'reporter_name' => $this->reporter_name,
            'reporter_contact' => $this->reporter_contact,
            'status' => $this->status,
            'status_description' => $this->status_description,
        ]);

        session()->flash('message', 'Missing person updated successfully!');
        return redirect()->route('missing');
    }


    public function render()
    {
        return view('livewire.admin.missing.edit-missing-person-page')->layout('layouts.app');
    }
}
