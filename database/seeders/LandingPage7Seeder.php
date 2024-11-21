<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_7page;

class LandingPage7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_7page::create([
            'choose-us-p-1' => 'Why choose us',
            'choose-us-h3' => 'We Grow Your Business Choose Services',
            'choose-us-p-2' => 'Business tailored it design, management & support services business agency elit, sed do eiusmod tempor.',
            'choose-us-h4-1' => 'Our success team man',
            'choose-us-h4-2' => 'Professional Best service',
            'choose-us-h4-3' => 'Long experience support',
            'choose-us-img-1' => 'assets/images/resources/counter-1-1.jpg',
            'choose-us-img-2' => 'assets/images/resources/counter-1-1.jpg',
            'choose-us-img-3' => 'assets/images/resources/counter-1-1.jpg',
        ]); 
    }
}
