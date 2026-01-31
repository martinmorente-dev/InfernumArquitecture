<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
            'email' => $this->faker->unique()->safeEmail(),
            'nickname' => str_replace(' ', '_', $this->faker->unique()->words(2, true)),
            'password' => bcrypt('dejameya'),
            'role' => $this->faker->randomElement(['admin', 'user']),
            'created_at' => now()
        ];
    }
}
