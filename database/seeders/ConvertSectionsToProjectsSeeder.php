<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\FilmSection;
use App\Models\PhotographySection;

class ConvertSectionsToProjectsSeeder extends Seeder
{
    public function run(): void
    {
        // Convert Film Sections to Projects
        $filmSections = FilmSection::all();
        foreach ($filmSections as $section) {
            Project::create([
                'title' => $section->title,
                'slug' => \Illuminate\Support\Str::slug($section->title),
                'description' => $section->description,
                'type' => 'film',
                'image_url' => $section->thumbnail_url,
                'video_url' => $section->video_url,
                'gallery' => [],
                'client' => 'Starset Media',
                'completion_date' => now()->subDays(rand(30, 365)),
                'featured' => $section->sort_order <= 3, // First 3 are featured
                'published' => $section->published,
                'sort_order' => $section->sort_order
            ]);
        }

        // Convert Photography Sections to Projects
        $photographySections = PhotographySection::all();
        foreach ($photographySections as $section) {
            // Special handling for Air Show Photography - use actual gallery
            $gallery = [];
            if ($section->title === 'Air Show Photography') {
                $airShowPath = public_path('storage/air-show');
                if (is_dir($airShowPath)) {
                    $files = glob($airShowPath . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
                    foreach ($files as $file) {
                        $filename = basename($file);
                        $gallery[] = '/storage/air-show/' . $filename;
                    }
                }
            }

            Project::create([
                'title' => $section->title,
                'slug' => \Illuminate\Support\Str::slug($section->title),
                'description' => $section->description,
                'type' => 'photography',
                'image_url' => $section->image_url,
                'video_url' => null,
                'gallery' => $gallery,
                'client' => 'Starset Media',
                'completion_date' => now()->subDays(rand(30, 365)),
                'featured' => $section->sort_order <= 3, // First 3 are featured
                'published' => $section->published,
                'sort_order' => $section->sort_order + 10 // Offset photography projects
            ]);
        }

        // Update existing projects sort order to make room
        Project::where('sort_order', '<=', 20)->increment('sort_order', 20);
    }
} 