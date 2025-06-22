<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\CrewMember;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample projects
        $projects = [
            [
                'title' => 'Callisto Short Film',
                'description' => 'A haunting science fiction short film about isolation and discovery in deep space. Winner of multiple film festival awards.',
                'type' => 'film',
                'image_url' => 'https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?w=800',
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'client' => 'Independent Production',
                'completion_date' => '2024-03-15',
                'featured' => true,
                'published' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Corporate Brand Photography',
                'description' => 'Professional headshots and brand photography for a tech startup. Clean, modern aesthetic with natural lighting.',
                'type' => 'photography',
                'image_url' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800',
                'client' => 'TechCorp Solutions',
                'completion_date' => '2024-02-20',
                'featured' => true,
                'published' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'Music Video Production',
                'description' => 'High-energy music video featuring dynamic camera work and creative visual effects.',
                'type' => 'film',
                'image_url' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=800',
                'video_url' => 'https://vimeo.com/123456789',
                'client' => 'Local Band Records',
                'completion_date' => '2024-01-10',
                'featured' => false,
                'published' => true,
                'sort_order' => 3
            ],
            [
                'title' => 'Restaurant Menu Design',
                'description' => 'Complete visual identity and menu design for an upscale restaurant. Modern typography with elegant color palette.',
                'type' => 'graphic_design',
                'image_url' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800',
                'client' => 'Bella Vista Restaurant',
                'completion_date' => '2023-12-05',
                'featured' => false,
                'published' => true,
                'sort_order' => 4
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // Create sample crew members
        $crewMembers = [
            [
                'name' => 'Rodrigo Henriquez',
                'role' => 'Creative Director',
                'bio' => 'Award-winning filmmaker and creative director with over 10 years of experience in visual storytelling. Passionate about creating compelling narratives that resonate with audiences.',
                'email' => 'rodrigo@starsetmedia.ca',
                'phone' => '+1 (403) 555-0123',
                'location' => 'Lethbridge, AB',
                'image_url' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400',
                'social_links' => [
                    'linkedin' => 'https://linkedin.com/in/rodrigohenriquez',
                    'instagram' => 'https://instagram.com/rodrigohenriquez'
                ],
                'core_team' => true,
                'published' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Jared Middlebrook',
                'role' => 'Technical Director',
                'bio' => 'Expert in post-production and technical implementation. Specializes in color grading, visual effects, and technical workflow optimization.',
                'email' => 'jared@starsetmedia.ca',
                'phone' => '+1 (403) 555-0124',
                'location' => 'Calgary, AB',
                'image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400',
                'social_links' => [
                    'linkedin' => 'https://linkedin.com/in/jaredmiddlebrook',
                    'twitter' => 'https://twitter.com/jaredmiddlebrook'
                ],
                'core_team' => true,
                'published' => true,
                'sort_order' => 2
            ]
        ];

        foreach ($crewMembers as $member) {
            CrewMember::create($member);
        }

        // Create sample services
        $services = [
            [
                'title' => 'Film & Video Production',
                'description' => 'Complete video production services from concept to final delivery. Including commercials, corporate videos, documentaries, and narrative films.',
                'features' => 'Pre-production planning, Professional filming, Post-production editing, Color grading, Sound design',
                'icon' => 'video',
                'image_url' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?w=600',
                'price_from' => 2500.00,
                'featured' => true,
                'published' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Photography Services',
                'description' => 'Professional photography for all your needs. From corporate headshots to event coverage and product photography.',
                'features' => 'Portrait photography, Event coverage, Product photography, Real estate photography, Photo editing',
                'icon' => 'camera',
                'image_url' => 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600',
                'price_from' => 500.00,
                'featured' => true,
                'published' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'Graphic Design',
                'description' => 'Creative graphic design solutions including branding, marketing materials, and digital design.',
                'features' => 'Logo design, Brand identity, Marketing materials, Web design, Print design',
                'icon' => 'design',
                'image_url' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600',
                'price_from' => 750.00,
                'featured' => false,
                'published' => true,
                'sort_order' => 3
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        $this->command->info('Sample data created successfully!');
    }
}
