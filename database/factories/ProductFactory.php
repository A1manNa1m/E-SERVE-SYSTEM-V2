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
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'type' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'quality' => $this->faker->randomElement(['new', 'used', 'refurbished']),
            'contact' => $this->faker->phoneNumber,
            'extraInfo' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['pending', 'in progress', 'Approved', 'Rejected']),
            'organizer' => $this->faker->company,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
