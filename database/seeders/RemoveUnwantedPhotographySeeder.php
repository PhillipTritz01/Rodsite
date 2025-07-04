<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\PhotographySection;

class RemoveUnwantedPhotographySeeder extends Seeder
{
    public function run(): void
    {
        $titles = [
            'Real Estate Photography',
            'Lifestyle Photography',
            'Commercial Photography',
            'Event Photography',
            'Wedding Photography',
            'Corporate Brand Photography',
        ];

        // Delete or unpublish projects
        foreach ($titles as $title) {
            Project::where('title', $title)->delete();
            PhotographySection::where('title', $title)->delete();
        }
    }
} 