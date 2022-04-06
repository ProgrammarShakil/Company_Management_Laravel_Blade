<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\logo;
use Illuminate\Database\Seeder;

class logoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logo = logo::where('title','LogoFromSeeder')->first();

        $faker = Factory::create();

        if(is_null($logo)){
            $logo = new logo();
            $logo->title = "LogoFromSeeder";
            $logo->image = 'https://cltd.com/assets/images/logo.png';
            $logo->save();
        }
    }
}
