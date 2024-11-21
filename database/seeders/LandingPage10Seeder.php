<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_10page;

class LandingPage10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_10page::create([
            'call-now-bg-image-1-path' => 'assets/images/shapes/cta-shape-1.png',
            'call-now-bg-image-2-path' => 'assets/images/shapes/cta-bg-2.png',
            'call-now-bg-image-3-path' => 'assets/images/shapes/cta-2-1.jpg',
            'call-now-h4-1' => 'Call This Now',
            'call-now-p-a-1' => '+025461556695',
            'call-now-p-a-2' => '+826542556455',
            'call-now-h4-2' => 'Solution Company',
            'call-now-p-a-3' => 'Call Now',
            'call-now-p' => 'We can provide you with a reliable<br> Please input an email address',
            'call-now-a-2' => 'Read More',
            'call-now-bg-image-4-path' => 'assets/images/resources/cta-2-2.png',
            'call-now-a-3' => 'Call Now',
        ]);
    }
}
