<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_9page;

class LandingPage9Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_9page::create([
            'collapse-bg-img' => 'assets/images/resources/counter-1-1.jpg',
            'collapse-h3-1' => 'k+',
            'collapse-p-1' => 'Successflly Trained',
            'collapse-h3-2' => 'k+',
            'collapse-p-2' => 'Projects Complited',
            'collapse-h3-3' => 'k+',
            'collapse-p-3' => 'Customers Support',
            'collapse-h4-1' => ' Maecenas facilisis erat id odio',
            'collapse-div-p-1' => 'There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour,',
            'collapse-h4-2' => 'Phasellus et vehicula nulla',
            'collapse-div-p-2' => 'There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour,',
            'collapse-h4-3' => 'Maecenas malesuada',
            'collapse-div-p-3' => 'There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour,',
            'collapse-h4-4' => 'Why you join our team',
            'collapse-div-p-4' => 'There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour,',
            'collapse-h4-5' => 'Maecenas malesuada',
            'collapse-div-p-5' => 'There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour,',

        ]); 
    }
}
