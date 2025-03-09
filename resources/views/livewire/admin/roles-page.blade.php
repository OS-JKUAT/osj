<div class="p-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Roles Management</h2>

    <form wire:submit.prevent="{{ $roleId ? 'update' : 'store' }}" class="space-y-4">
        <div>
            <input type="text" wire:model="name" placeholder="Role Name"
                class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-100 dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div>
            <label class="font-semibold text-gray-700 dark:text-gray-300">Permissions:</label>
            <div class="flex flex-wrap gap-2 mt-2">
                @foreach($allPermissions as $perm)
                    <label class="flex items-center space-x-2 text-gray-700 dark:text-gray-300">
                        <input type="checkbox" wire:model="permissions" value="{{ $perm->id }}"
                            class="rounded text-blue-500 focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600"
                        >
                        <span>{{ $perm->name }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
            {{ $roleId ? 'Update' : 'Create' }} Role
        </button>
    </form>

    <div class="overflow-x-auto mt-6">
        <table class="w-full border-collapse bg-gray-50 dark:bg-gray-800 dark:text-gray-200 rounded-lg">
            <thead>
                <tr class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Permissions</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        <td class="px-4 py-2">{{ $role->name }}</td>
                        <td class="px-4 py-2">{{ implode(', ', $role->permissions->pluck('name')->toArray()) }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <button wire:click="edit({{ $role->id }})"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg transition duration-300">
                                Edit
                            </button>
                            <button wire:click="delete({{ $role->id }})"
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
