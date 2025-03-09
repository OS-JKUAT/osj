<div class="p-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg max-w-1/2" >
    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Permissions Management</h2>

    <form wire:submit.prevent="store" class="space-y-4">
        <input type="text" wire:model="name" placeholder="Permission Name"
            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-100 dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        >

        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
            Create Permission
        </button>
    </form>

    <div class="overflow-x-auto mt-6">
        <table class="w-full border-collapse bg-gray-50 dark:bg-gray-800 dark:text-gray-200 rounded-lg">
            <thead>
                <tr class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $perm)
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        <td class="px-4 py-2">{{ $perm->name }}</td>
                        <td class="px-4 py-2">
                            <button wire:click="delete({{ $perm->id }})"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg transition duration-300">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
