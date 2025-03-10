<div class="p-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">User Management</h2>

    <!-- Success Message -->
    @if (session()->has('success'))
        <div class="mt-2 p-3 text-green-800 bg-green-200 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <!-- Assign Role Form -->
    <div class="mt-4 flex flex-col sm:flex-row gap-3">
        <select wire:model="userId" class="p-2 border dark:border-gray-700 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200">
            <option value="">Select User</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
            @endforeach
        </select>

        <select wire:model="selectedRole" class="p-2 border dark:border-gray-700 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200">
            <option value="">Select Role</option>
            @foreach($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>

        <button wire:click="assignRole" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
            Assign Role
        </button>
    </div>

    <!-- User Table -->
    <table class="w-full mt-6 border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">
        <thead class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200">
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-800 dark:text-gray-200">
            @foreach($users as $user)
                <tr class="border-b border-gray-300 dark:border-gray-700">
                    <td class="px-4 py-2">{{ $user->name }}</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                    <td class="px-4 py-2">
                        {{ $user->roles->pluck('name')->join(', ') ?: 'No Role' }}
                    </td>
                    <td class="px-4 py-2">
                        <button wire:click="deleteUser({{ $user->id }})"
                                class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded-md">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
