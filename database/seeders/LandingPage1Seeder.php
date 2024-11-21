<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landing_2page;

class LandingPage1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        landing_2page::create([
            'company-status-h6' => 'Our Company Status',
            'company-status-h3' => 'The Success of our Solution',
            'company-status-1h4' => 'IT Consulting',
            'company-status-1p' => 'Lorem ipsum dolor sit amecon sectetur adipisicing elit, sed do eiusmod tempor',
            'company-status-2h4' => 'Leadership Work',
            'company-status-2p' => 'Lorem ipsum dolor sit amecon sectetur adipisicing elit, sed do eiusmod tempor',
            'company-status-3h4' => 'Solution Business',
            'company-status-3p' => 'Lorem ipsum dolor sit amecon sectetur adipisicing elit, sed do eiusmod tempor',
        ]);    
    }
}
