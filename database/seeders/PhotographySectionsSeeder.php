<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhotographySection;

class PhotographySectionsSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'title' => 'Air Show Photography',
                'description' => 'Spectacular aerial photography capturing the thrill and precision of air shows, aerobatic displays, and military aircraft demonstrations.',
                'button_text' => 'View Air Show Gallery',
                'button_url' => '/gallery/air-show',
                'image_url' => '/storage/air-show/DSC_1244.jpg',
                'sort_order' => 1,
                'published' => true
            ],
            [
                'title' => 'Wedding Photography',
                'description' => 'Romantic and timeless wedding photography that preserves your special day\'s most precious moments forever.',
                'button_text' => 'View Wedding Packages',
                'button_url' => '#contact',
                'image_url' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 2,
                'published' => true
            ],
            [
                'title' => 'Commercial Photography',
                'description' => 'Product photography, corporate headshots, and marketing materials that elevate your brand and drive business growth.',
                'button_text' => 'Commercial Services',
                'button_url' => '#contact',
                'image_url' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 3,
                'published' => true
            ],
            [
                'title' => 'Event Photography',
                'description' => 'Capturing the energy and emotion of your special events, parties, and corporate functions with professional expertise.',
                'button_text' => 'Event Coverage',
                'button_url' => '#contact',
                'image_url' => 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 4,
                'published' => true
            ],
            [
                'title' => 'Lifestyle Photography',
                'description' => 'Natural, candid photography that captures authentic moments and genuine emotions in beautiful, real-life settings.',
                'button_text' => 'Lifestyle Sessions',
                'button_url' => '#contact',
                'image_url' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 5,
                'published' => true
            ],
            [
                'title' => 'Real Estate Photography',
                'description' => 'Professional property photography that showcases homes and commercial spaces at their best to attract potential buyers.',
                'button_text' => 'Property Photography',
                'button_url' => '#contact',
                'image_url' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 6,
                'published' => true
            ]
        ];

        foreach ($sections as $section) {
            PhotographySection::create($section);
        }
    }
} 