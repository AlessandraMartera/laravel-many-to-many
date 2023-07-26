<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// collego entrambi i model che uso
use App\Models\Project;
use App\Models\Technology;


class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creo 10 tipi di Tencnologie Fake
        $technologies = Technology::factory()->count(10)->create();

        foreach ( $technologies as $technology){
            // prendo ( tra 1 e 5 ) progetti e li metto in projects
            $projects = Project :: inRandomOrder() -> limit(rand(1, 5)) -> get();

            // prendo technology, **prendo la relazione che c'e tra i due**
            // e gli associo i progetti presi in projects
            $technology -> projects() -> attach($projects);
        }

    }
}
