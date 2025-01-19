<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8 dark:bg-gray-900 dark:text-gray-100">
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row items-center md:items-start md:gap-8">
            <img src="{{ asset($person->poster ? 'storage/poster/' . $person->poster : 'placeholderimages/john-doe.avif') }}" alt="image of {{ $person->name }}" class="w-40 h-40 object-cover rounded">
            <div class="mt-6 md:mt-0">
                <h1 class="text-3xl font-bold">{{ $person->name }}</h1>
                <p class="text-gray-600 dark:text-gray-400 text-lg">
                    <strong>Nickname:</strong> {{ $person->nickname ?? 'N/A' }}
                </p>
                <p class="text-gray-600 dark:text-gray-400">
                    <strong>Status:</strong>
                    <span class="{{ $person->status === 'missing' ? 'text-red-500' : 'text-green-500' }}">
                        {{ ucfirst($person->status) }}
                    </span>
                </p>
                <p class="text-gray-600 dark:text-gray-400">
                    <strong>Status Description:</strong> {{ $person->status_description ?? 'N/A' }}
                </p>
            </div>
        </div>

        <!-- Details Section -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-xl font-semibold ">Personal Details</h2>
                <div class="w-20 h-1 bg-indigo-500 rounded mb-2"></div>
                <ul class="space-y-1">
                    <li><strong>Age:</strong> {{ $person->age ?? 'N/A' }}</li>
                    <li><strong>Gender:</strong> {{ $person->gender ?? 'N/A' }}</li>
                    <li><strong>Date of Birth:</strong> {{ $person->dob ? $person->dob->format('F d, Y') : 'N/A' }}</li>
                    <li><strong>Place of Birth:</strong> {{ $person->place_of_birth ?? 'N/A' }}</li>
                    <li><strong>Hair:</strong> {{ $person->hair ?? 'N/A' }}</li>
                    <li><strong>Eyes:</strong> {{ $person->eyes ?? 'N/A' }}</li>
                    <li><strong>Language:</strong> {{ $person->language ?? 'N/A' }}</li>
                    <li><strong>Citizenship:</strong> {{ $person->citizenship ?? 'N/A' }}</li>
                    <li><strong>Hashtag:</strong> {{ $person->hashtag ?? 'N/A' }}</li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-semibold">Last Seen</h2>
                <div class="w-10 h-1 bg-indigo-500 rounded mb-2"></div>
                <ul class="space-y-1">
                    <li><strong>Last Seen Location:</strong> {{ $person->last_seen_location ?? 'N/A' }}</li>
                    <li><strong>Date Last Seen:</strong> {{ $person->date_last_seen ? $person->date_last_seen->format('F d, Y') : 'N/A' }}</li>
                </ul>
            </div>
        </div>

        <!-- Additional Details -->
        <div class="mt-6">
            <h2 class="text-xl font-semibold ">Additional Information</h2>
            <div class="w-24 h-1 bg-indigo-500 rounded mb-2"></div>
            <p class="text-gray-700 dark:text-gray-300">
                {{ $person->description ?? 'No description available.' }}
            </p>
            <p class="text-gray-700 dark:text-gray-300 mt-2">
                <strong>Suspicion:</strong> {{ $person->suspicion ?? 'No suspicion available.' }}
            </p>
        </div>

        <!-- Reporter Information -->
        <div class="mt-6">
            <h2 class="text-xl font-semibold ">Contact Kin</h2>
            <div class="w-20 h-1 bg-indigo-500 rounded mb-2"></div>
            <ul class="space-y-1">
                <li><strong>Name:</strong> {{ $person->reporter_name }}</li>
                <li><strong>Contact:</strong> {{ $person->reporter_contact }}</li>
            </ul>
        </div>
        <x-support-text></x-support-text>

    </div>
</div>
