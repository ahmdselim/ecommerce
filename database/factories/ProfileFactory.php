<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::first();
        return [
            "image" => "image.png",
            "phone" => fake()->numberBetween(0, 1000000),
            "city" => fake()->city(),
            "state" => fake()->name(),
            "zip" => fake()->numberBetween(0,10000),
            "country" => fake()->country(),
            "company" => fake()->company(),
            "dateOfBirth" => now(),
            "user_id" => $user->id,
        ];
    }
}
