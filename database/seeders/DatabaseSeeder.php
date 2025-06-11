<?php

namespace Database\Seeders;

use App\Models\User; // Make sure your User model is correctly imported
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Import Hash facade for bcrypt (or use Hash::make)

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Define the users data in an array
        $users = [
            [
               'name' => 'Admin User',
               'email' => 'admin@gmail.com',
               'type' => 1, // Assuming 'type' is a column in your users table
               'password' => Hash::make('123456789'), // Use Hash::make for consistent hashing
            ],
            [
               'name' => 'service User',
               'email' => 'service@gmail.com',
               'type' => 2,
               'password' => Hash::make('123456789'),
            ],
            [
               'name' => 'User',
               'email' => 'user@gmail.com',
               'type' => 0,
               'password' => Hash::make('123456789'),
            ],
        ];

        // Loop through the users array and create each user
        foreach ($users as $key => $user) {
            User::create($user);
        }

        // Optional: If you have other seeders, call them here
        // $this->call(AnotherTableSeeder::class);
    }
}
