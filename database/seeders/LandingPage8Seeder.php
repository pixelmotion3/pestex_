<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_8page;

class LandingPage8Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_8page::create([
            'testimonial-say-p-strong' => 'Our Testimonial Say',
            'testimonial-say-h2' => 'What our clients says company',

            'testimonial-say-p-i-1' => 'loremibrgibfbewifbweifbweifbe wifewifewifewifewifbewibfwiegnorgngwbngiwebgfewifbewifbewifbewifbweifbewifbewifbie wfbewbfiewbfiiewbfewibfewbifewifibwfiewbfiewbfiewbfiewbifewibfbeiwfbiwefbiwefibwebfiewf',
            'testimonial-say-h3-1' => 'Porat Barsa',
            'testimonial-say-h5-1' => 'Founder',
            
            'testimonial-say-p-i-2' => 'loremibrgibfbewifbweifbweifbewifewifewifewifewifbewibfwiegnorgngwbngiwebgfewifbewifbewifbewifbweifbewifbewifbie wfbewbfiewbfiiewbfewibfewbifewifibwfiewbfiewbfiewbfiewbifewibfbeiwfbiwefbiwefibwebfiewf',
            'testimonial-say-h3-2' => 'Porat Barsa',
            'testimonial-say-h5-2' => 'Founder',
            
            'testimonial-say-p-i-3' => 'loremibrgibfbewifbweifbweifbewifewifewifewifewifbewibfwiegnorgngwbngiwebgfewifbewifbewifbewifbweifbewifbewifbie wfbewbfiewbfiiewbfewibfewbifewifibwfiewbfiewbfiewbfiewbifewibfbeiwfbiwefbiwefibwebfiewf',
            'testimonial-say-h3-3' => 'Porat Barsa',
            'testimonial-say-h5-3' => 'Founder',
        ]);  
    }
}
