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
        // Type::factory()->count(10)->create();
        $types = ['JavaScript', 'C++', 'PHP', 'Python', 'Ruby'];

        foreach ($types as $type) {

            Type::create([
                "language" => $type
            ]);
        }
    }
}
