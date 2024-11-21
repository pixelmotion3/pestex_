<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_11page;

class LandingPage11Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_11page::create([
            'watch-video-p-strong-1' => 'Our Watch video',
            'watch-video-h2' => 'Want to learn to videoidea Business',
            'watch-video-p-2' => 'lorem fwefowenfoewf fewofinewfoew oienwfowenidea Business fewewfew efwfefdwe ewfwefw',
            'watch-video-p-3' => 'lorem fwefowenfoewf fewofinewfoew oienwfowenidea Business fewewfew efwfefdwe ewfwefw',

            'contact-us-h2-part-1' => 'Get in touch',
            'contact-us-h2-part-2' => 'Make an apointement'
        ]);
    }
}
