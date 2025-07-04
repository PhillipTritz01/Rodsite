<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceSection;

class ServicesWithPagesSeeder extends Seeder
{
    public function run(): void
    {
        // Create Professional Photography Service
        $photoService = Service::create([
            'title' => 'Professional Photography',
            'slug' => 'professional-photography',
            'description' => 'Capture life\'s precious moments with our professional photography services. From portraits to events, we deliver stunning images that tell your story.',
            'page_subtitle' => 'Creating beautiful memories through the lens',
            'features' => json_encode([
                'Professional equipment and lighting',
                'Experienced photographers',
                'High-resolution digital images',
                'Quick turnaround time',
                'Multiple shooting locations',
                'Post-processing included'
            ]),
            'icon' => 'fas fa-camera',
            'image_url' => 'https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=1200&h=800&fit=crop&auto=format',
            'price_from' => 299.99,
            'featured' => true,
            'published' => true,
            'has_dedicated_page' => true,
            'page_template' => 'photography',
            'sort_order' => 1
        ]);

        // Add sections to photography service
        $photoSections = [
            [
                'title' => 'Air Show Photography',
                'description' => 'Spectacular aerial photography capturing the thrill and precision of air shows, aerobatic displays, and military aircraft demonstrations with professional equipment and expertise.',
                'button_text' => 'View Portfolio',
                'button_url' => '/portfolio',
                'image_url' => '/storage/air-show/DSC_1244.jpg',
                'sort_order' => 1
            ],
            [
                'title' => 'Wedding Photography',
                'description' => 'Your special day deserves to be captured with care and artistry. Our wedding photography packages ensure every precious moment is preserved for a lifetime of memories.',
                'button_text' => 'View Wedding Packages',
                'button_url' => route('contact'),
                'image_url' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 2
            ],
            [
                'title' => 'Event Photography',
                'description' => 'From corporate events to birthday parties, we capture the energy and excitement of your special occasions. Professional event photography that tells the story of your celebration.',
                'button_text' => 'Plan Event Coverage',
                'button_url' => route('contact'),
                'image_url' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 3
            ],
            [
                'title' => 'Commercial Photography',
                'description' => 'Professional product and commercial photography that showcases your business in the best light. High-quality images for marketing, websites, and promotional materials.',
                'button_text' => 'Get Commercial Quote',
                'button_url' => route('contact'),
                'image_url' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 4
            ]
        ];

        foreach ($photoSections as $sectionData) {
            $photoService->sections()->create($sectionData + ['published' => true]);
        }

        // Create Video Production Service
        $videoService = Service::create([
            'title' => 'Video Production',
            'slug' => 'video-production',
            'description' => 'From concept to completion, we create compelling video content that engages your audience and tells your story with impact.',
            'page_subtitle' => 'Bringing your vision to life through cinematic storytelling',
            'features' => json_encode([
                '4K video recording',
                'Professional editing suite',
                'Drone footage available',
                'Color grading and effects',
                'Multi-camera setups',
                'Audio recording and mixing'
            ]),
            'icon' => 'fas fa-video',
            'image_url' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1200&h=800&fit=crop&auto=format',
            'price_from' => 899.99,
            'featured' => true,
            'published' => true,
            'has_dedicated_page' => true,
            'page_template' => 'film',
            'sort_order' => 2
        ]);

        // Add sections to video service
        $videoSections = [
            [
                'title' => 'Corporate Videos',
                'description' => 'Professional corporate video production that communicates your brand message effectively. From company overviews to training materials, we create videos that engage and inform.',
                'button_text' => 'Discuss Corporate Video',
                'button_url' => route('contact'),
                'image_url' => 'https://images.unsplash.com/photo-1551836022-deb4988cc6c0?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 1
            ],
            [
                'title' => 'Music Videos',
                'description' => 'Creative music video production that brings your songs to life. We work with artists to create visually stunning videos that complement and enhance their musical vision.',
                'button_text' => 'Create Music Video',
                'button_url' => route('contact'),
                'image_url' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 2
            ],
            [
                'title' => 'Event Videography',
                'description' => 'Capture the excitement and emotion of your special events with professional videography. From weddings to conferences, we create cinematic memories that last forever.',
                'button_text' => 'Book Event Filming',
                'button_url' => route('contact'),
                'image_url' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?w=1200&h=800&fit=crop&auto=format',
                'sort_order' => 3
            ]
        ];

        foreach ($videoSections as $sectionData) {
            $videoService->sections()->create($sectionData + ['published' => true]);
        }

        // Create Web Design Service (without dedicated page)
        Service::create([
            'title' => 'Web Design & Development',
            'slug' => 'web-design-development',
            'description' => 'Modern, responsive websites that look great on all devices. We build with the latest technologies to ensure fast, secure, and user-friendly experiences.',
            'features' => json_encode([
                'Responsive design',
                'SEO optimization',
                'Content management systems',
                'E-commerce solutions',
                'Custom functionality',
                'Ongoing maintenance'
            ]),
            'icon' => 'fas fa-code',
            'image_url' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=1200&h=800&fit=crop&auto=format',
            'price_from' => 1299.99,
            'featured' => false,
            'published' => true,
            'has_dedicated_page' => false,
            'sort_order' => 3
        ]);
    }
} 