<div class="max-w-4xl mx-auto my-5 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-6 dark:text-gray-200">Add Missing Person</h2>

    @if (session()->has('message'))
        <div class="p-4 mb-6 bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-200 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <!-- Poster -->
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1 dark:text-gray-200">Poster</label>
            <input wire:model="poster" type="file" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
            @error('poster') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <!-- Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Name</label>
                <input wire:model="name" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required />
                @error('name') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Nickname -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Nickname</label>
                <input wire:model="nickname" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('nickname') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Age -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Age</label>
                <input wire:model="age" type="number" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('age') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Gender -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Gender</label>
                <select wire:model="gender" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                @error('gender') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- HAir color/style -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">HAir color/style</label>
                <input wire:model="hair" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('hair') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Eyes color/description -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Eyes color/description</label>
                <input wire:model="eyes" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('eyes') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Citizenship -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Citizenship</label>
                <input wire:model="citizen" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('citizen') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Language(s) -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Language(s)</label>
                <input wire:model="language" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('language') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Hashtag -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Hashtag</label>
                <input wire:model="hashtag" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('hashtag') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Place of Birth -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Place of Birth</label>
                <input wire:model="place_of_birth" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('place_of_birth') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Date of Birth -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Date of Birth</label>
                <input wire:model="dob" type="date" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('dob') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Last Seen Location -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Last Seen Location</label>
                <input wire:model="last_seen_location" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('last_seen_location') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Date Last Seen -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Date Last Seen</label>
                <input wire:model="date_last_seen" type="date" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" />
                @error('date_last_seen') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>

            <!-- Suspicion -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 dark:text-gray-200">Suspicion</label>
                <textarea wire:model="suspicion" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"></textarea>
                @error('suspicion') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1 dark:text-gray-200">Description</label>
            <textarea wire:model="description" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"></textarea>
            @error('description') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
        </div>

        <!-- Reporter Name -->
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1 dark:text-gray-200">Reporter Name</label>
            <input wire:model="reporter_name" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required />
            @error('reporter_name') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
        </div>

        <!-- Reporter Contact -->
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1 dark:text-gray-200">Reporter Contact</label>
            <input wire:model="reporter_contact" type="text" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required />
            @error('reporter_contact') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1 dark:text-gray-200">Status</label>
            <select wire:model="status" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" required>
                <option value="">Select Status</option>
                <option value="missing">Missing</option>
                <option value="found">Found</option>
            </select>
            @error('status') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
        </div>

        <!-- Status Details -->
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1 dark:text-gray-200">Status Description</label>
            <textarea wire:model="status_description" class="w-full border rounded p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"></textarea>
            @error('status_description') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 dark:bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-600 dark:hover:bg-blue-700">
            Add Missing Person
        </button>
        
        @if (session()->has('message'))
        <div class="p-4 mb-6 bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-200 rounded">
            {{ session('message') }}
        </div>
    @endif
    </form>
</div>
