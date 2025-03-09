<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;


class RolesPage extends Component
{
    public $name, $permissions = [], $roleId;
    public $allPermissions;
    public $roles;

    public function mount()
    {
        if (!Auth::user() || !Auth::user()->hasRole(['admin','missing_person_admin'])) {
            abort(403, 'Unauthorized action.');
        }
        $this->allPermissions = Permission::all();
        $this->roles = Role::get();
    }

    public function store()
    {
        $this->validate(['name' => 'required|unique:roles']);
        $role = Role::create(['name' => $this->name]);
        $role->syncPermissions($this->permissions);
        session()->flash('message', 'Role created successfully.');
        $this->reset(['name', 'permissions']);
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $this->roleId = $role->id;
        $this->name = $role->name;
        $this->permissions = $role->permissions->pluck('id')->toArray();
    }

    public function update()
    {
        $role = Role::findOrFail($this->roleId);
        $role->update(['name' => $this->name]);
        $role->syncPermissions($this->permissions);
        session()->flash('message', 'Role updated successfully.');
        $this->reset(['name', 'permissions', 'roleId']);
    }

    public function delete($id)
    {
        Role::findOrFail($id)->delete();
        session()->flash('message', 'Role deleted.');
    }

    public function render()
    {
        // try {
        //     if (!class_exists(\Spatie\Permission\Models\Role::class)) {
        //         throw new \Exception("Role class does not exist.");
        //     }
        //     $roles = \Spatie\Permission\Models\Role::with('permissions')->get();
        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }

        return view('livewire.admin.roles-page')
            ->layout('layouts.app');
    }
}
