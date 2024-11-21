<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_6page;

class LandingPage6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_6page::create([
            'about-now-h6' => 'Our About Now',
            'about-now-h3' => 'We Can Clients with the About Services',
            'about-now-p' => 'Business tailored it design, management & support services business agency elit, sed do eiusmod tempor.',
            'about-now-1-bg-img-path' => 'assets/images/shapes/about-bg-1.jpg',
            'about-now-2-img-path' => 'assets/images/shapes/about-1-shape-1.png',
            'about-now-li-1' => 'Business onstructivism.',
            'about-now-li-2' => 'Media in this solution.',
            'about-now-li-3' => 'We give management',
            'about-now-li-4' => 'We give management',
            'about-now-li-5' => 'Business onstructivism.',
            'about-now-li-6' => 'Media in this solution.',
        ]);    
    }
}
