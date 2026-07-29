<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Testimonial;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();
        
        Project::create([
            'title' => 'Aether Digital Experience',
            'category' => 'Web Application / UI & UX',
            'description' => 'Ultra-modern digital platform designed for Next-Gen interactive web experience.',
            'client' => 'Aether Global',
            'year' => '2026',
            'image_path' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1200&auto=format&fit=crop',
            'link' => 'https://accordstudio.com',
            'featured' => true,
        ]);

        Project::create([
            'title' => 'Komorebi Haute Couture',
            'category' => 'Brand Identity & Strategy',
            'description' => 'Luxury monochrome visual identity and e-commerce experience.',
            'client' => 'Komorebi Tokyo',
            'year' => '2026',
            'image_path' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop',
            'link' => 'https://accordstudio.com',
            'featured' => true,
        ]);

        Project::create([
            'title' => 'Vanguard Autonomous OS',
            'category' => 'Product Design & Mobile App',
            'description' => 'Futuristic IoT dashboard and mobile interface for smart infrastructure.',
            'client' => 'Vanguard Tech',
            'year' => '2025',
            'image_path' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=1200&auto=format&fit=crop',
            'link' => 'https://accordstudio.com',
            'featured' => true,
        ]);

        Testimonial::truncate();

        Testimonial::create([
            'client_name' => 'Alexander Wright',
            'client_company' => 'Aether Global',
            'client_role' => 'Founder & CEO',
            'content' => 'ACCORD redefined our brand identity. Their attention to high-contrast aesthetics and fluid interaction design is unmatched in the industry.',
            'rating' => 5,
        ]);

        Testimonial::create([
            'client_name' => 'Elena Rostova',
            'client_company' => 'Komorebi Paris',
            'client_role' => 'Creative Director',
            'content' => 'Working with ACCORD felt effortless. They delivered a world-class digital luxury experience that elevated our brand prestige instantly.',
            'rating' => 5,
        ]);

        Testimonial::create([
            'client_name' => 'Marcus Vance',
            'client_company' => 'Vanguard Tech',
            'client_role' => 'VP of Design',
            'content' => 'Exceptional visual polish, speed, and precision. ACCORD is our go-to digital studio for ambitious high-impact projects.',
            'rating' => 5,
        ]);
    }
}
