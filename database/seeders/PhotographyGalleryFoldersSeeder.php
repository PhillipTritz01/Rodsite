<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Project;

class PhotographyGalleryFoldersSeeder extends Seeder
{
    public function run(): void
    {
        $base = public_path('storage');
        if (!is_dir($base)) {
            $this->command->warn('public/storage directory not found. Run php artisan storage:link.');
            return;
        }

        // Folders to ignore (system or already handled)
        $ignore = [
            'air-show',        // already exists
            'crew-images',
            'home-images',
            'project-images',
            'services',
            '.', '..',
        ];

        foreach (File::directories($base) as $dir) {
            $folder = basename($dir);
            if (in_array($folder, $ignore)) {
                continue;
            }

            // Gather images in this folder
            $images = collect(File::files($dir))
                ->filter(fn($f) => in_array(strtolower($f->getExtension()), ['jpg','jpeg','png','gif','webp']))
                ->map(fn($f) => '/storage/'.$folder.'/'.$f->getFilename())
                ->values()
                ->toArray();

            if (empty($images)) {
                $this->command->warn("No images found in folder: {$folder}");
                continue;
            }

            $title = Str::title(str_replace('-', ' ', $folder));
            $slug  = Str::slug($title);

            Project::updateOrCreate(
                ['slug' => $slug],
                [
                    'title'       => $title,
                    'description' => "Photography gallery for {$title}.",
                    'type'        => 'photography',
                    'image_url'   => $images[0], // first image as cover
                    'video_url'   => null,
                    'gallery'     => $images,
                    'client'      => null,
                    'completion_date' => now(),
                    'featured'    => false,
                    'published'   => true,
                    'sort_order'  => 0,
                ]
            );
        }
    }
} 