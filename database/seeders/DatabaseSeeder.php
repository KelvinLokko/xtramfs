<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role; // Include Role model
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void 

    {
        // Check if roles already exist (optional)
        if (Role::count() === 0) {
            Role::create(['name' => 'admin']);
            Role::create(['name' => 'analyst']);
            Role::create(['name' => 'compliance officer']);

        }

        // Create a few sample users
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1, // Admin role
            'email_verified' => true,
        ]);

        User::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'janesmith@example.com',
            'password' => Hash::make('password'),
            'role_id' => 2, // User role
            'email_verified' => true,
        ]);
    }

}
