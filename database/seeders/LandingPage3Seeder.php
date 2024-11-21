<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_3page;

class LandingPage3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_3page::create([
            'best-service-h6-1' => 'Our Best Service',
            'best-service-h3-1' => 'We Kinds of Services Business',

            'best-service-img-path-1' => 'assets/images/resources/service-1-1.jpg',
            'best-service-a-1' => 'Roedores',
            'best-service-p-1' => 'We businesss standard chunk of Ipsum used since is Agency & Star tup.',
            
            'best-service-img-path-2' => 'assets/images/resources/service-1-1.jpg',
            'best-service-a-2' => 'Baratas',
            'best-service-p-2' => 'We businesss standard chunk of Ipsum used since is Agency & Startup.',
            
            'best-service-img-path-3' => 'assets/images/resources/service-1-1.jpg',
            'best-service-a-3' => 'Percevejos',
            'best-service-p-3' => 'We businesss standard chunk of Ipsum used since is Agency & Star tup.',
        ]);
    }
}
