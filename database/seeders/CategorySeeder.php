<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();

        // foreach(range(1 , 7) as $index){

        //     Category::create([
        //         'admin_id' => 1,
        //         'name' => $faker->name,
        //         'slug' => strtolower(str_replace(' ','-',$faker->name)),
        //         'status' => rand(0,1),
        //     ]);
        // }
    }
}
