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

            'name' => fake()->word(),
            'languages' => fake()->randomElement(['HTML', 'CSS', 'VanillaJS', 'VueJS', 'PHP', 'Laravel', 'SCSS']),
            'collaborators' => fake()->name(),
            'date_finished' => fake()->dateTime(),
        ];
    }
}
