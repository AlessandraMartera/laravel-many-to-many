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
            $type = Type::inRandomOrder()->first();
            $project->type_id = $type->id;
            $project->save();
        }

        // foreach ($posts as $post) {

        //     $user = User :: inRandomOrder() -> first();

        //     $post -> user_id = $user -> id;
        //     $post -> save();
        // }




    }
}
