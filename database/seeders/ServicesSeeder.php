<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Film & Video Production',
                'slug' => 'film-video-production',
                'description' => 'Professional video content that tells compelling stories and engages your audience. From concept to final cut, we handle every aspect of video production.',
                'features' => [
                    'Corporate Videos',
                    'Commercial Production', 
                    'Music Videos',
                    'Documentary Films',
                    'Event Coverage',
                    'Post-Production & Editing'
                ],
                'icon' => 'fas fa-video',
                'image_url' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&h=600&fit=crop&auto=format',
                'price_from' => 500.00,
                'featured' => true,
                'published' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Photography',
                'slug' => 'photography',
                'description' => 'Stunning photography that captures moments and creates lasting impressions. Let us capture the moment or help your business with quality pictures that tell your story.',
                'features' => [
                    'Portrait Photography',
                    'Event Photography',
                    'Product Photography', 
                    'Corporate Headshots',
                    'Artistic Photography',
                    'Photo Editing & Retouching'
                ],
                'icon' => 'fas fa-camera',
                'image_url' => 'https://images.unsplash.com/photo-1554048612-b6a482b224dd?w=800&h=600&fit=crop&auto=format',
                'price_from' => 200.00,
                'featured' => true,
                'published' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'Graphic Design & Illustration',
                'slug' => 'graphic-design-illustration',
                'description' => 'Modern logos that are clean and trendy, we guarantee your brand will stand out. From brand identity to marketing materials, we create designs that make an impact.',
                'features' => [
                    'Brand Identity Design',
                    'Logo Creation',
                    'Marketing Materials',
                    'Digital Graphics',
                    'Print Design',
                    'Web Graphics'
                ],
                'icon' => 'fas fa-palette',
                'image_url' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&h=600&fit=crop&auto=format',
                'price_from' => 150.00,
                'featured' => false,
                'published' => true,
                'sort_order' => 3
            ],
            [
                'title' => 'Something Else?',
                'slug' => 'custom-creative-services',
                'description' => 'Some projects just don\'t fit into every category. Let us know what you need and we will be happy to make it come true. We love creative challenges and unique projects.',
                'features' => [
                    'Creative Consulting',
                    'Concept Development',
                    'Multi-Media Projects',
                    'Brand Strategy',
                    'Digital Experiences',
                    'Custom Solutions'
                ],
                'icon' => 'fas fa-lightbulb',
                'image_url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop&auto=format',
                'price_from' => null,
                'featured' => false,
                'published' => true,
                'sort_order' => 4
            ]
        ];

        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }
    }
} 