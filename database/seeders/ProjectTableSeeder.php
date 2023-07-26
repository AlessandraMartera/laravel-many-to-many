<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;
use App\Models\Project;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $projects = Project::factory()->count(10)->make();

        foreach($projects as $project){
            // creo la variabe type e le associo un elemento random
            $type = Type::inRandomOrder()->first();

            // prendo la variabile project ( singolo elemento dell'array projects)
            // mi metto nella colonna type id e le le associo l'id del type preso randomicamente sopra
            $project->type_id = $type->id;

            // salvo
            $project->save();
        }

    }
}
