<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product' => fake()->words(1, true),
            'color' => fake()->safeColorName(),
            'category' => fake()->jobTitle(),
            'price' => fake()->randomNumber(5, true),
        ];
    }
}

// name prodouct = $fake->words(1, true)
// color = $fake->safeColorName()
// cate = $fake->jobTitle()
// price = $fake->randomNumber(5, true)