<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = Team::where('name','shakil_islam')->first();

        $faker = Factory::create();

        if(is_null($team)){
            $team = new Team();
            $team->name = "shakil_islam";
            $team->image = 'https://blogger.googleusercontent.dgp';
            $team->designation = 'Web Developer';
            $team->save();
        }
    }
}
