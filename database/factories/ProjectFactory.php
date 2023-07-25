<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> bothify('laravel-??#??###??-frepo'),
            'agency' => fake() -> company(),
            'decription' => fake() -> text(300),
            'publish_date' => fake() -> dateTimeThisDecade(),
            'completed' => fake() -> boolean(),
            'type_id' => 1
        ];
    }
}
