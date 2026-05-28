<?php

namespace Database\Factories;

use App\Models\ListJobs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ListJobs>
 */
class ListJobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
    'title' => fake()->sentence(),
    'description' => fake()->paragraph(),
    'company' => fake()->company(),
    'location' => fake()->city(),
    'salary' => fake()->randomFloat(2, 50000, 150000),
];
    }
}
