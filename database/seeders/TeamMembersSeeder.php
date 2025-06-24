<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CrewMember;

class TeamMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing crew members first
        CrewMember::truncate();

        // Rodrigo Henriquez - Executive Producer/Director
        CrewMember::create([
            'name' => 'Rodrigo Henriquez',
            'role' => 'Executive Producer/Director',
            'email' => 'rodrigo@starsetmedia.ca',
            'phone' => '(403) 123-4567',
            'location' => 'Lethbridge, Alberta',
            'bio' => 'Rodrigo is the creative visionary behind Starset Media, bringing years of experience in film production and direction. His passion for storytelling and innovative approach to visual media has established him as a leading creative director in the industry. He specializes in conceptualizing and executing high-quality video productions that captivate audiences and deliver powerful messages.',
            'image_url' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=face&auto=format',
            'social_links' => [
                'linkedin' => 'https://linkedin.com/in/rodrigo-henriquez',
                'twitter' => 'https://twitter.com/rodrigo_starset',
                'instagram' => 'https://instagram.com/rodrigo.starset',
                'website' => 'https://rodrigohenriquez.com'
            ],
            'published' => true,
            'core_team' => true,
            'sort_order' => 1,
        ]);

        // Shannon Milligan - Executive Producer/Director/Artist
        CrewMember::create([
            'name' => 'Shannon Milligan',
            'role' => 'Executive Producer/Director/Artist',
            'email' => 'shannon@starsetmedia.ca',
            'phone' => '(403) 234-5678',
            'location' => 'Calgary, Alberta',
            'bio' => 'Shannon brings a unique blend of artistic vision and production expertise to Starset Media. As both a creative artist and experienced producer, she bridges the gap between artistic expression and commercial viability. Her background in visual arts combined with her production skills makes her instrumental in creating visually stunning and emotionally resonant content.',
            'image_url' => 'https://images.unsplash.com/photo-1494790108755-2616b612b515?w=400&h=400&fit=crop&crop=face&auto=format',
            'social_links' => [
                'linkedin' => 'https://linkedin.com/in/shannon-milligan',
                'twitter' => 'https://twitter.com/shannon_starset',
                'instagram' => 'https://instagram.com/shannon.milligan.art',
                'website' => 'https://shannonmilligan.art'
            ],
            'published' => true,
            'core_team' => true,
            'sort_order' => 2,
        ]);

        // Brent Clark - Executive Assistant/Actor/Writer
        CrewMember::create([
            'name' => 'Brent Clark',
            'role' => 'Executive Assistant/Actor/Writer',
            'email' => 'brent@starsetmedia.ca',
            'phone' => '(403) 345-6789',
            'location' => 'Lethbridge, Alberta',
            'bio' => 'Brent is a multi-talented professional who wears many hats at Starset Media. As an executive assistant, he ensures smooth operations and project coordination. His acting and writing skills bring depth to our creative projects, whether he\'s performing on screen or crafting compelling narratives. His versatility and dedication make him an invaluable part of our core team.',
            'image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=face&auto=format',
            'social_links' => [
                'linkedin' => 'https://linkedin.com/in/brent-clark',
                'twitter' => 'https://twitter.com/brent_starset',
                'instagram' => 'https://instagram.com/brent.clark.actor',
                'website' => 'https://brentclark.ca'
            ],
            'published' => true,
            'core_team' => true,
            'sort_order' => 3,
        ]);

        // Jared Middlebrook - Cinematographer
        CrewMember::create([
            'name' => 'Jared Middlebrook',
            'role' => 'Cinematographer',
            'email' => 'jared@starsetmedia.ca',
            'phone' => '(403) 456-7890',
            'location' => 'Calgary, Alberta',
            'bio' => 'Jared is our technical director and master cinematographer, responsible for capturing the visual essence of every project. With an exceptional eye for composition and lighting, he transforms creative visions into stunning visual realities. His technical expertise and artistic sensibility ensure that every frame tells a story and every shot serves the greater narrative purpose.',
            'image_url' => 'https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=400&h=400&fit=crop&crop=face&auto=format',
            'social_links' => [
                'linkedin' => 'https://linkedin.com/in/jared-middlebrook',
                'twitter' => 'https://twitter.com/jared_starset',
                'instagram' => 'https://instagram.com/jared.cinematography',
                'website' => 'https://jaredmiddlebrook.com'
            ],
            'published' => true,
            'core_team' => true,
            'sort_order' => 4,
        ]);

        $this->command->info('Team members seeded successfully!');
    }
} 