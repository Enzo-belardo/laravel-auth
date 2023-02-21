<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++){
            $newProject = new Project();
            $newProject->title = $faker->word();
            $newProject->description = $faker->paragraphs(2, true);
            $newProject->programming_language = $faker->word();
            $newProject->type = $faker->word();
            $newProject->thumb = $faker->imageUrl();
            $newProject->save();
        }
    }
}