<?php

namespace Database\Seeders;
use Faker\Factory;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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

        //     Product::create([
        //         'admin_id' => 1,
        //         'category_id' => rand(1,6),
        //         'title' => $faker->name,
        //         'slug' => strtolower(str_replace(' ','-',$faker->name)),
        //         'description' => $faker->paragraph,
        //         'image' => 'https://a-Solution-(Facebook).jpg',
        //     ]);
        // }
    }
}
