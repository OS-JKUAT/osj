<div class="max-w-4xl mx-auto p-4 dark:bg-gray-900 dark:text-white">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
        <img src="{{$hero->image ? asset('storage/poster/'.$hero->image) : asset( 'placeholderimages/john-doe.avif') }}"
            alt="{{ $hero->name }}"
            class="w-48 h-48 rounded-lg shadow-lg border-2 dark:border-gray-700">

        <div>
            <h1 class="text-3xl font-bold">{{ $hero->name }} ({{ $hero->alias }})</h1>
            <p class="text-gray-500 dark:text-gray-400 text-sm">
                Born: {{ $hero->dob->format('Y-m-d') }} - Died: {{ $hero->dod ? $hero->dod->format('Y-m-d') : 'N/A' }}
            </p>
            <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $hero->contributions }}</p>
        </div>
    </div>

    <!-- Hero Details -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <h2 class="text-lg font-semibold">Personal Details</h2>
            <p><strong>Birthplace:</strong> {{ $hero->birthplace }}</p>
            <p><strong>Place of Death:</strong> {{ $hero->place_of_death }}</p>
            <p><strong>Ethnicity:</strong> {{ $hero->ethnicity }}</p>
            <p><strong>County:</strong> {{ $hero->county }}</p>
            <p><strong>Cause:</strong> {{ $hero->cause }}</p>
            <p><strong>Religion:</strong> {{ $hero->religion }}</p>
            <p><strong>Residence:</strong> {{ $hero->residence }}</p>
            <p><strong>Case Number:</strong> {{ $hero->case_number }}</p>
            <p><strong>Awards:</strong> {{ $hero->awards }}</p>
        </div>

        <div>
            <h2 class="text-lg font-semibold">Education & Career</h2>
            <p><strong>High School:</strong> {{ $hero->highschool }}</p>
            <p><strong>University:</strong> {{ $hero->uni }}</p>
            <p><strong>Occupation:</strong> {{ $hero->occupation }}</p>
        </div>
    </div>

    <!-- Death Details -->
    @if ($hero->death)
        <h2 class="mt-6 text-lg font-semibold">Circumstances of Death</h2>
        <p class="text-gray-700 dark:text-gray-300">{{ $hero->death }}</p>
    @endif

    <!-- Hero Media -->
    <h2 class="mt-6 text-lg font-semibold">Media</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-2">
        @forelse ($hero->maandamanoHeroMedia as $media)
            <img src="{{ asset($media->file_path) }}" class="rounded-lg shadow-md border dark:border-gray-700">
        @empty
            <p class="text-gray-500 dark:text-gray-400">No media available.</p>
        @endforelse
    </div>
    <div class="m-4">
        @auth
            @if(auth()->user()->hasRole(['admin','missing_person_admin']))
            <a href="{{ route('maandamano-heroes.edit',['heroId'=>$hero->id]) }}" class="mx-2 p-2 bg-green-500 hover:bg-green-700 text-white rounded-lg">
                Add media
            </a>
            @endif
        @endauth

    </div>

    <!-- Kin Details -->
    <h2 class="mt-6 text-lg font-semibold">Family & Kin</h2>
    <ul class="list-disc pl-6">
        @forelse ($hero->maandamanoHeroKin as $kin)
            <li>{{ $kin->name }} ({{ $kin->relationship }})</li>
            <p>Contact: {{ $kin->contact }}</p>
        @empty
            <p class="text-gray-500 dark:text-gray-400">No kin details available.</p>
        @endforelse
    </ul>
    {{-- Add kin --}}
    <div class="m-4">
        @auth
            @if(auth()->user()->hasRole(['admin','missing_person_admin']))
                <a href="{{ route('maandamano-heroes.edit',['heroId'=>$hero->id]) }}" class="mx-2 p-2 bg-green-500 hover:bg-green-700 text-white rounded-lg">
                    Add kin
                </a>
            @endif
        @endauth
    </div>

    <!-- Eulogy -->
    @if ($hero->eulogy)
        <h2 class="mt-6 text-lg font-semibold">Eulogy</h2>
        <p class="italic text-gray-700 dark:text-gray-300">{{ $hero->eulogy }}</p>
    @endif

    <!-- Back Button -->
    <div class="mt-6">
        <a href="{{ route('maandamano.heroes') }}" class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">
            Back to Heroes List
        </a>
        @auth
            @if(auth()->user()->hasRole(['admin','missing_person_admin']))
                <a href="{{ route('maandamano-heroes.edit',['heroId'=>$hero->id]) }}" class="mx-2 p-2 bg-green-500 hover:bg-green-700 text-white rounded-lg">
                    Edit Hero
                </a>
            @endif
        @endauth

    </div>
</div>
