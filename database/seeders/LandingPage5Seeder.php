<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_5page;

class LandingPage5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_5page::create([
            'our-services-tab-2' => 'Residencial',
            'our-services-tab-2-h2' => 'Hospitality Cleaning Services',
            'our-services-tab-2-p' => 'These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.',
            'our-services-tab-2-li-1' => 'Professional & Expert Cleaning Service',
            'our-services-tab-2-li-2' => 'Advanced Technology',
            'our-services-tab-2-li-3' => 'Healthy and Worry Free Environment',
            'our-services-tab-2-p-2' => 'Don’t Wait to Clean Your Work Place',
            'our-services-tab-2-a' => 'Make an Appointment',
        ]); 
    }
}
