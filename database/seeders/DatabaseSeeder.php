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
        // User::factory(10)->create();
        $this->call([
            // UserSeeder::class, 
            AdminSeeder::class, 
            logoSeeder::class,
            TeamSeeder::class,
            // ClientSeeder::class,
            // SliderSeeder::class,
            // NavSliderSeeder::class,
            // CategorySeeder::class,
            // SubCategorySeeder::class,
            // ProductSeeder::class,
        ]);
    }
}
