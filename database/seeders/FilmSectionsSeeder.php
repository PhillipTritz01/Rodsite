<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FilmSection;

class FilmSectionsSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'title' => 'Music Videos',
                'description' => 'Creative and dynamic music videos that capture the essence of your sound and artistic vision with cinematic storytelling.',
                'button_text' => 'Get Music Video Quote',
                'button_url' => '#contact',
                'video_url' => 'https://youtube.com/watch?v=example1',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 1,
                'published' => true
            ],
            [
                'title' => 'Commercial Videos',
                'description' => 'Professional commercial content that drives engagement and showcases your brand with compelling visual narratives.',
                'button_text' => 'Commercial Services',
                'button_url' => '#contact',
                'video_url' => 'https://youtube.com/watch?v=example2',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 2,
                'published' => true
            ],
            [
                'title' => 'Short Films',
                'description' => 'Narrative storytelling that captivates audiences and brings creative visions to the screen with professional filmmaking techniques.',
                'button_text' => 'Film Production',
                'button_url' => '#contact',
                'video_url' => 'https://youtube.com/watch?v=example3',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1489599511986-c6c8e56b7b84?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 3,
                'published' => true
            ],
            [
                'title' => 'Event Coverage',
                'description' => 'Professional documentation of your special events, conferences, and milestone moments with cinematic quality.',
                'button_text' => 'Event Videography',
                'button_url' => '#contact',
                'video_url' => 'https://youtube.com/watch?v=example4',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 4,
                'published' => true
            ],
            [
                'title' => 'Documentary Films',
                'description' => 'Compelling documentary storytelling that explores real stories and important topics with authentic cinematic approach.',
                'button_text' => 'Documentary Production',
                'button_url' => '#contact',
                'video_url' => 'https://youtube.com/watch?v=example5',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 5,
                'published' => true
            ],
            [
                'title' => 'Live Streaming',
                'description' => 'Professional live streaming setup and production for events, concerts, and broadcasts with multi-camera coverage.',
                'button_text' => 'Live Stream Services',
                'button_url' => '#contact',
                'video_url' => 'https://youtube.com/watch?v=example6',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 6,
                'published' => true
            ]
        ];

        foreach ($sections as $section) {
            FilmSection::create($section);
        }
    }
} 