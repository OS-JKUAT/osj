<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;


class PermissionsPage extends Component
{
    public $name, $permissionId;

    public function store()
    {
        $this->validate(['name' => 'required|unique:permissions']);
        Permission::create(['name' => $this->name]);
        session()->flash('message', 'Permission created.');
        $this->reset('name');
    }

    public function delete($id)
    {
        Permission::findOrFail($id)->delete();
        session()->flash('message', 'Permission deleted.');
    }

    public function render()
    {
        if (!Auth::user() || !Auth::user()->hasRole(['admin','missing_person_admin'])) {
            abort(403, 'Unauthorized action.');
        }

        return view('livewire.admin.permissions-page', ['permissions' => Permission::all()])->layout('layouts.app');
    }
}
