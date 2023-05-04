<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::first();
        $category = Category::first();

        return [
            "name" => ["en" => fake()->name(), "ar" => "احمد"],
            "image" => "image.png",
            "category_id" => $category->id,
            "user_id" => $user->id,
            'price' => fake()->numberBetween(0, 10456),
        ];
    }
}
