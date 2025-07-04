<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Project;

class PhotographyCataloguesSeeder extends Seeder
{
    public function run(): void
    {
        // Base directory where the user will place catalogue folders
        $base = storage_path('app/public/photography');

        if (!is_dir($base)) {
            $this->command->warn("Photography base directory not found: {$base}");
            return;
        }

        foreach (File::directories($base) as $dir) {
            $title = basename($dir);          // e.g. Spencer, Revanchist
            $slug  = Str::slug($title);

            // Collect all image files (jpg, jpeg, png, webp, gif)
            $images = collect(File::files($dir))
                ->filter(fn($f) => in_array(strtolower($f->getExtension()), ['jpg','jpeg','png','webp','gif']))
                ->map(fn($f) => 'photography/' . $title . '/' . $f->getFilename())
                ->values()
                ->toArray();

            if (empty($images)) {
                $this->command->warn("No images found for catalogue: {$title}");
                continue;
            }

            Project::updateOrCreate(
                ['slug' => $slug],
                [
                    'title'       => $title,
                    'description' => "Photography gallery for {$title}.",
                    'type'        => 'photography',
                    'image_url'   => null,
                    'video_url'   => null,
                    'gallery'     => $images,
                    'featured'    => false,
                    'published'   => true,
                    'sort_order'  => 0,
                ]
            );
        }
    }
} 