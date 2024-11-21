<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_4page;

class LandingPage4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_4page::create([
            'our-services-h6-1' => 'Our Services',
            'our-services-h2-1' => 'Delivering a Higher Standard <br />Cleaning Services',
            'our-services-bg-img-path-1' => 'assets/images/backgrounds/service-1.jpg',
            'our-services-tab-1' => 'Commercial',
            'our-services-tab-1-h2' => 'Hostel Cleaning Services',
            'our-services-tab-1-p' => 'These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best.',
            'our-services-tab-1-li-1' => 'Professional & Expert Cleaning Service',
            'our-services-tab-1-li-2' => 'Advanced Technology',
            'our-services-tab-1-li-3' => 'Healthy and Worry Free Environment',
            'our-services-tab-1-p-2' => 'Don’t Wait to Clean Your Work Place,',
            'our-services-tab-1-a-2' => 'Make an Appointment',
        ]); 
    }
}
