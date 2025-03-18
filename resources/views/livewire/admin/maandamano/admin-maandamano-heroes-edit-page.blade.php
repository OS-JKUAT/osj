<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg dark:bg-gray-900 dark:text-white">
    <h1 class="text-2xl font-bold mb-4">Edit Maandamano Hero</h1>

    @if (session()->has('message'))
        <p class="text-green-500">{{ session('message') }}</p>
    @endif

    <form wire:submit.prevent="updateHero" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text" wire:model="name" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Slug</label>
                <input type="text" wire:model="slug" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('slug') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Alias</label>
                <input type="text" wire:model="alias" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('alias') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Date of Birth</label>
                <input type="date" wire:model="dob" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('dob') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Date of Death</label>
                <input type="date" wire:model="dod" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('dod') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Birthplace</label>
                <input type="text" wire:model="birthplace" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('birthplace') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Place of Death</label>
                <input type="text" wire:model="place_of_death" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('place_of_death') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Ethnicity</label>
                <input type="text" wire:model="ethnicity" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('ethnicity') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">County</label>
                <input type="text" wire:model="county" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('county') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">High School</label>
                <input type="text" wire:model="highschool" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('highschool') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">University</label>
                <input type="text" wire:model="uni" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('uni') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <div>
                <label class="block text-sm font-medium">Occupation</label>
                <input type="text" wire:model="occupation" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('occupation') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Cause of Death</label>
                <input type="text" wire:model="cause" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('cause') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium">Contributions</label>
            <textarea type="text" wire:model="contributions" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700"></textarea>
            @error('contributions') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Affiliations</label>
            <textarea type="text" wire:model="affiliations" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700"></textarea>
            @error('affiliations') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <div>
                <label class="block text-sm font-medium">Awards</label>
                <input type="text" wire:model="awards" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('awards') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Case number</label>
                <input type="text" wire:model="case_number" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('case_number') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Religion</label>
                <input type="text" wire:model="religion" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('religion') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Residence</label>
                <input type="text" wire:model="residence" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('residence') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Quotes</label>
                <input type="text" wire:model="quotes" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('quotes') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Legacy</label>
                <input type="text" wire:model="legacy" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('legacy') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Death Circumstance</label>
                <input type="text" wire:model="death" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('death') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Memorial location</label>
                <input type="text" wire:model="memorial_location" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
                @error('memorial_location') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium">Eulogy</label>
            <textarea type="text" wire:model="eulogy" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700"></textarea>
            @error('eulogy') <p class="text-red-500 text-sm dark:text-red-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Image</label>
            <input type="file" wire:model="image" class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
            @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Documents</label>
            <input type="file" wire:model="documents" multiple class="w-full border p-2 rounded dark:bg-gray-800 dark:border-gray-700">
            @error('documents') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg">Update Hero</button>
    </form>
</div>
