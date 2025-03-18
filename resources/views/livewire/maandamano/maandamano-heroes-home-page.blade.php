<div class="max-w-6xl mx-auto p-4">
    <!-- Search and Filters -->
    <div class="flex flex-wrap items-center gap-4 mb-4">
        <input type="text" wire:model="search" placeholder="Search heroes..."
            class="w-full md:w-1/3 p-2 border border-gray-300 dark:border-gray-700 rounded-lg max-w-64 dark:bg-gray-800 dark:text-white" />

        <button wire:click="performSearch"
            class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">
            Search
        </button>

        <button wire:click="resetFilters"
            class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
            Reset
        </button>

        <select wire:model="filterCounty"
            class="p-2 border border-gray-300 dark:border-gray-700 rounded-lg dark:bg-gray-800 max-w-64 dark:text-white">
            <option value="">All Counties</option>
            @foreach ($counties as $county)
                <option value="{{ $county }}">{{ $county }}</option>
            @endforeach
        </select>

        <select wire:model="filterCause"
            class="p-2 border border-gray-300 dark:border-gray-700 rounded-lg dark:bg-gray-800 max-w-64 dark:text-white">
            <option value="">All Causes</option>
            @foreach ($causes as $cause)
                <option value="{{ $cause }}">{{ $cause }}</option>
            @endforeach
        </select>

        <select wire:model="perPage"
            class="p-2 border border-gray-300 dark:border-gray-700 rounded-lg dark:bg-gray-800 max-w-64 dark:text-white">
            <option value="5">5 per page</option>
            <option value="10">10 per page</option>
            <option value="20">20 per page</option>
        </select>
    </div>

    @auth
        @if(auth()->user()->hasRole(['admin','missing_person_admin']))
            <div class="flex justify-end">
                <a href="{{ route('admin.maandamano-heroes.add') }}"
                class="inline-block bg-indigo-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                    Add Hero
                </a>
            </div>
        @endif
    @endauth


    <!-- Heroes List -->
    <div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow-lg">
        @forelse ($heroes as $hero)
            <a href="{{ route('heroes.show', ['slug'=>$hero->slug])}}">
                <div class="p-4 border-b dark:border-gray-700 flex flex-col md:flex-row items-start md:items-center gap-4">
                        <img src="{{ $hero->image ? asset('storage/poster/' . $hero->image) : asset('placeholderimages/john-doe.avif') }}"  alt="{{ $hero->name }}"
                        class="w-24 h-24 rounded-full object-cover border-2 dark:border-gray-700">
                    <div class="flex-1">
                        <h2 class="text-xl font-semibold dark:text-white">{{ $hero->name }} ({{ $hero->alias }})</h2>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">{{ $hero->contributions }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">{{ \Carbon\Carbon::parse($hero->dob)->format('Y-m-d') }} to {{ \Carbon\Carbon::parse($hero->dod)->format('Y-m-d') }}</p>
                    </div>
                </div>
            </a>
        @empty
            <p class="text-center text-gray-500 dark:text-gray-400">No heroes found.</p>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $heroes->links() }}
    </div>
</div>
