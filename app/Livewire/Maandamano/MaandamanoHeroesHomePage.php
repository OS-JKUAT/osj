<?php

namespace App\Livewire\Maandamano;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MaandamanoHero;

class MaandamanoHeroesHomePage extends Component
{
    use WithPagination;

    public $search = '';
    public $searchQuery = ''; // Stores the manually triggered search
    public $filterCounty = '';
    public $filterCause = '';
    public $perPage = 5;

    public function updatingSearch()
    {
        // Prevents auto-refresh, only refreshes on button click
    }

    public function performSearch()
    {
        $this->searchQuery = $this->search;
        $this->resetPage(); // Reset pagination when searching
    }

    protected $queryString = [
        'searchQuery' => ['except' => ''],
        'filterCounty' => ['except' => ''],
        'filterCause' => ['except' => ''],
        'perPage' => ['except' => 5],
    ];

    public function resetFilters()
    {
        $this->reset(['search', 'searchQuery', 'filterCounty', 'filterCause', 'perPage']);
        $this->resetPage();
    }

    public function render()
    {
        $heroes = MaandamanoHero::query()
        ->when($this->searchQuery, function ($query) {
            $query->where('name', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('alias', 'like', '%' . $this->searchQuery . '%')
                  ->orWhere('contributions', 'like', '%' . $this->searchQuery . '%');
        })
        ->when($this->filterCounty, function ($query) {
            $query->where('county', $this->filterCounty);
        })
        ->when($this->filterCause, function ($query) {
            $query->where('cause', $this->filterCause);
        })
        ->orderBy('dob', 'asc')
        ->paginate($this->perPage);

    $counties = MaandamanoHero::select('county')->distinct()->pluck('county');
    $causes = MaandamanoHero::select('cause')->distinct()->pluck('cause');

        return view('livewire.maandamano.maandamano-heroes-home-page', compact('heroes', 'counties', 'causes'))->layout('layouts.app');
    }
}
