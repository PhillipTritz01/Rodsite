<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin users and team members
        $this->call([
            AdminUserSeeder::class,
            SampleDataSeeder::class,
            HomePageContentSeeder::class,
            ServicesSeeder::class,
            ServicesWithPagesSeeder::class,
            TeamMembersSeeder::class,
            FilmSectionsSeeder::class,
            PhotographySectionsSeeder::class,
            PhotographyGalleryFoldersSeeder::class,
            PhotographyCataloguesSeeder::class,
            RemoveUnwantedPhotographySeeder::class,
        ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
