<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;


class UserManagementPage extends Component
{
    public $users;
    public $roles;
    public $userId;
    public $selectedRole;

    public function mount()
    {
        if (!Auth::user() || !Auth::user()->hasRole('admin')) {
            # code...
            abort(403, 'Unauthorized action.');
        }

        $this->users = User::with('roles')->get();
        $this->roles = Role::all();
    }

    public function assignRole()
    {
        $user = User::find($this->userId);
        if ($user && $this->selectedRole) {
            $user->syncRoles([$this->selectedRole]);
            $this->users = User::with('roles')->get(); // Refresh users list
            session()->flash('success', 'Role assigned successfully.');
        }
    }

    public function deleteUser($id)
    {
        User::find($id)?->delete();
        $this->users = User::with('roles')->get(); // Refresh users list
        session()->flash('success', 'User deleted successfully.');
    }

    public function render()
    {
        return view('livewire.admin.user-management-page')->layout('layouts.app');
    }
}
