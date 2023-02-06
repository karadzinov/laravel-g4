<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->company(),
            "price" => fake()->numberBetween(1000, 6000),
            "quantity"=> fake()->numberBetween(1, 10),
            "description" => fake()->realText(),
            "image" => fake()->imageUrl(),
            "user_id" => rand(1,3)
        ];
    }
}
