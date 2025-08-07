<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favourite>
 */
class FavouriteFactory extends Factory
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
            'favouritable_id' => 1, // You can set this dynamically in tests/seeds
            'favouritable_type' => $this->faker->randomElement([
                \App\Models\Event::class,
                \App\Models\Announcement::class,
                \App\Models\Service::class,
                \App\Models\Product::class,
            ]),
        ];
    }
}
