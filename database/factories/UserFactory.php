<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competitor>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => strtoupper(Str::random(9)),
            'email' => fake()->unique()->email(),
            'password' => bcrypt('user'),
            'name' => fake()->name(),
            'address' => fake()->address(),
            'birthdate' => fake()->date(),
            'sex' => fake()->numberBetween(0, 1),
        ];
    }
}
