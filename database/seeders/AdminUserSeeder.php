<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create admin user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@starsetmedia.ca'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        // Create another admin user
        User::firstOrCreate(
            ['email' => 'rodrigo@starsetmedia.ca'],
            [
                'name' => 'Rodrigo Henriquez',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        // Create Phillip Tritz admin user
        User::firstOrCreate(
            ['email' => 'phillip.tritz@gmail.com'],
            [
                'name' => 'Phillip Tritz',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );
    }
} 