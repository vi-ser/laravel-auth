<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 8; $i++) {

            $newProject = new Project();

            $newProject->description = $faker->paragraph();
            $newProject->src = $faker->imageUrl(640, 480, 'abstract', true);
            $newProject->technology = implode(' ', $faker->words(5));
            $newProject->github_link = 'https://github.com/';
            $newProject->date = $faker->date();

            $newProject->save();
        }

    }

}