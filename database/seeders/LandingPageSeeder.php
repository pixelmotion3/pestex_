<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LandingPage::create([
            'nav-paragraph' => 'Come visit us we have a great deal of products for you  to review.',

            'quote-form-tab-title-1' => 'Pedir orçamento',
            'quote-form-tab-title-2' => 'Contacte-nos',
            'quote-form-tab-2-h2' => 'Tem alguma duvida ou precisa de ajuda?',
            'quote-form-tab-2-p' => 'Entre em contacto connosco',
            
            'carrousel-h5' => 'Wellcome To It-Solution !',
            'carrousel-h2' => 'Get Our Business<br> This It Soluti<span>o</span>n',
            'carrousel-p' => 'Business a soluion and emirate in the Arab known for luxury city for Company.',
            'carrousel-a-1' => 'Contact Now',
            'carrousel-bg-img-path' => 'assets/images/backgrounds/slider-1-3.jpg',
            
        ]);
    }
}
