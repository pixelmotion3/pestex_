<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LandingPageSeeder::class,
            LandingPage1Seeder::class,
            LandingPage2Seeder::class,
            LandingPage3Seeder::class,
            LandingPage4Seeder::class,
            LandingPage5Seeder::class,
            LandingPage6Seeder::class,
            LandingPage7Seeder::class,
            LandingPage8Seeder::class,
            LandingPage9Seeder::class,
            LandingPage10Seeder::class,
            LandingPage11Seeder::class,
        ]);

    }
}
