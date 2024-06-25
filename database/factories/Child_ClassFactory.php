<?php

namespace Database\Factories;

use App\Models\Child;
use App\Models\KiderClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child_Class>
 */
class Child_ClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'child_id' => Child::factory(),
            'class_id' => KiderClass::factory(),
        ];
    }
}
