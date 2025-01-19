<div  class="container mx-auto px-6 py-12">
    {{-- The best athlete wants his opponent at his best. --}}
    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger mt-4">
            {{ session('error') }}
        </div>
    @endif
    <section class="text-center">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-gray-200 mb-6">Help Us Bring Them Home</h1>
        <p class="text-gray-600 dark:text-gray-400 text-lg">Search for missing persons or report a loved one who has gone missing. Together, we can make a difference.</p>
        {{-- <div class="mt-8">
            <input type="text" placeholder="Search by name or location" class="w-full md:w-1/2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-700">
            <button class="mt-4 md:mt-0 md:ml-4 px-6 py-2 bg-blue-600 dark:bg-blue-500 text-white rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600">Search</button>
        </div> --}}
    </section>

    <section id="recent" class="mt-12">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Recently Reported Missing</h2>

        @auth
            @if(auth()->user()->hasRole('admin'))
                <div class="flex justify-end">
                    <a href="{{ route('missing.add') }}"
                    class="inline-block bg-indigo-600 text-white font-semibold py-2 px-4 rounded shadow hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                        Add Person
                    </a>
                </div>
            @endif
        @endauth
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 lg:gap-4">
            @foreach ($missingPeople as $person)
                <div class="text-center">
                    <a href="{{ route('missing.detail', $person->slug) }}">
                        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 mt-2 -mb-2 flex flex-col items-center h-72">
                            <!-- Image with max height -->
                            {{-- <img
                                src="{{ asset($person->poster ? 'storage/poster/' . $person->poster : 'placeholderimages/john-doe.avif') }}"
                                alt="image of {{ $person->name }}"
                                class="sm:w-full max-h-36 object-cover rounded"> --}}
                            <img src="{{ $person->poster ? asset('storage/' . $person->poster) : asset('placeholderimages/john-doe.avif') }}" alt="image of {{ $person->name }}" class="sm:w-full max-h-36 object-cover rounded">

                            <!-- Content -->
                            <div class="mt-4 text-center">
                                <h3 class="text-l font-semibold text-gray-800 dark:text-gray-200">{{ $person->name }}</h3>
                                <p class="text-gray-600 dark:text-gray-400">AKA: {{ $person->nickname ?? 'N/A' }}</p>
                                <p class="text-gray-600 dark:text-gray-400">Age: {{ $person->age ?? 'N/A' }}</p>
                                <p class="text-gray-600 dark:text-gray-400">Status: {{ $person->status ?? 'N/A' }}</p>
                            </div>

                        </div>
                    </a>
                    @if(Auth::check() && Auth::user()->hasRole('admin'))
                        <button
                            class="px-4 bg-red-600 text-white rounded-md hover:bg-red-700 z-10"
                            onclick="if (confirm('Are you sure you want to delete this person: {{$person->name}}?')) { Livewire.dispatch('deletePerson', [{{$person->id}}])}"
                        >
                            Delete
                        </button>
                        <a href="{{route('missing.edit', $person->id)}}">
                            <button
                                class="px-4 bg-green-600 text-white rounded-md hover:bg-green-700 z-10"
                            >
                                Edit
                            </button>
                        </a>
                    @endif
                </div>
            @endforeach

        </div>

        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4 mt-12">Recently Reported Found</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 lg:gap-4">
            @foreach ($missingFoundPeople as $foundPerson)
                <div class="text-center">
                    <a href="{{ route('missing.detail', $foundPerson->slug) }}">
                        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 mt-2 -mb-2 flex flex-col items-center h-72">
                            <!-- Image with max height -->
                            <img
                                src="{{ asset($foundPerson->poster ? 'storage/poster/' . $foundPerson->poster : 'placeholderimages/john-doe.avif') }}"
                                alt="image of {{ $foundPerson->name }}"
                                class="sm:w-full max-h-36 object-cover rounded">

                            <!-- Content -->
                            <div class="mt-4 text-center">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $foundPerson->name }}</h3>
                                <p class="text-gray-600 dark:text-gray-400">AKA: {{ $foundPerson->nickname ?? 'N/A' }}</p>
                                <p class="text-gray-600 dark:text-gray-400">Age: {{ $foundPerson->age ?? 'N/A' }}</p>
                                <p class="text-gray-600 dark:text-gray-400">Status: {{ $foundPerson->status ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </a>
                    @if(Auth::check() && Auth::user()->hasRole('admin'))
                        <button
                            class="px-4 bg-red-600 text-white rounded-md hover:bg-red-700 z-10"
                            onclick="if (confirm('Are you sure you want to delete this person: {{$foundPerson->name}}?')) { Livewire.dispatch('deletePerson', [{{$foundPerson->id}}])}"
                        >
                            Delete
                        </button>
                        <a href="{{route('missing.edit', $foundPerson->id)}}">
                            <button
                                class="px-4 bg-green-600 text-white rounded-md hover:bg-green-700 z-10"
                            >
                                Edit
                            </button>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    {{-- <section id="report" class="mt-12 bg-gray-200 dark:bg-gray-700 p-6 rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Report a Missing Person</h2>
        @livewire('report-missing')
    </section> --}}

</div>
