<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Creating default roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Seeding the admin user
        $admin = User::create([
            'name'     => 'Admin User',
            'email'    => 'admin@osj.com',
            'password' => Hash::make('password'), // hashed password
        ]);

        // Assigning role to admin
        $admin->assignRole($adminRole);

        // Seeding a regular user
        $user = User::create([
            'name'     => 'Regular User',
            'email'    => 'user@osj.com',
            'password' => Hash::make('password'), // hashed password
        ]);

        // Assigning role to user
        $user->assignRole($userRole);
    }
}
