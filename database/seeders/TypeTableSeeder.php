<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // non uso questa perchè ho un numero finito di elementi scelti
        // Type::factory()->count(10)->create();

        // inserisco tutti gli elementi in in array
        $types = ['JavaScript', 'C++', 'PHP', 'Python', 'Ruby'];


        foreach ($types as $type) {

            // prendo la classe Type e ad ogni righe le assegno un elemento diverso dell'array
            Type::create([
                "language" => $type
            ]);
        }
    }
}
