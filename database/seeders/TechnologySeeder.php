<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0; $i<10; $i++){
            $newTechnology = new Technology();
            $newTechnology->name = $faker->sentence(3);
            $newTechnology->slug = Str::slug($newTechnology->name); 
            $newTechnology->save();
        }

    }
}
