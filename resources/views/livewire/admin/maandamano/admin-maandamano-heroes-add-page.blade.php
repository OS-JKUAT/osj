<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg dark:bg-gray-900 dark:text-white">
    <h1 class="text-2xl font-bold mb-4">Add Maandamano Hero</h1>

    @if (session()->has('message'))
        <p class="text-green-500 dark:text-green-400">{{ session('message') }}</p>
    @endif

    <form wire:submit.prevent="saveHero" class="space-y-4" enctype="multipart/form-data">
        <!-- Personal Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text" wire:model="name" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('name') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Alias</label>
                <input type="text" wire:model="alias" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('alias') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Date of Birth</label>
                <input type="date" wire:model="dob" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('dob') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Date of Death</label>
                <input type="date" wire:model="dod" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('dod') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Birthplace</label>
                <input type="text" wire:model="birthplace" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('birthplace') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Place of Death</label>
                <input type="text" wire:model="place_of_death" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('place_of_death') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Ethnicity</label>
                <input type="text" wire:model="ethnicity" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('ethnicity') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">County</label>
                <input type="text" wire:model="county" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('county') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">High School</label>
                <input type="text" wire:model="highschool" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('highschool') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">University</label>
                <input type="text" wire:model="uni" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('uni') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Occupation</label>
                <input type="text" wire:model="occupation" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('occupation') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Cause of death</label>
                <input type="text" wire:model="cause" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('cause') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
            <label class="block text-sm font-medium">Contributions</label>
            <textarea wire:model="contributions" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white"></textarea>
            @error('contributions') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block text-sm font-medium">Affiliations</label>
            <textarea wire:model="affiliations" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white"></textarea>
            @error('affiliations') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
        </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Awards</label>
                <input type="text" wire:model="awards" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('awards') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Case Number</label>
                <input type="text" wire:model="case_number" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('case_number') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Religion</label>
                <input type="text" wire:model="religion" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('religion') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Residence</label>
                <input type="text" wire:model="residence" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('residence') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Quotes</label>
                <input type="text" wire:model="quotes" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('quotes') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Legacy</label>
                <input type="text" wire:model="legacy" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('legacy') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Memorial Location</label>
                <input type="text" wire:model="memorial_location" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('memorial_location') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Death circumstance</label>
                <input type="text" wire:model="death" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('death') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium">Eulogy</label>
            <textarea wire:model="eulogy" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white"></textarea>
            @error('eulogy') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Image</label>
            <input type="file" wire:model="image" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
            @error('image') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Documents (Upload multiple)</label>
            <input type="file" wire:model="documents" multiple class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700 dark:text-white">
            @error('documents') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">
            Save Hero
        </button>
    </form>
</div>
