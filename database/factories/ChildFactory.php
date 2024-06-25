<?php

namespace Database\Factories;
use App\Models\Child;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'childName' => fake()->name(),
            'birthDate' => fake()->date(),
        ];
    }
}
