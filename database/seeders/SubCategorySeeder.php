<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
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

        //     SubCategory::create([
        //         'admin_id' => 1,
        //         'category_id' =>  rand(1,6),
        //         'name' => $faker->name,
        //         'slug' => strtolower(str_replace(' ','-',$faker->name)),
        //         'status' => rand(0,1),
        //     ]);
        // }
    }
}
