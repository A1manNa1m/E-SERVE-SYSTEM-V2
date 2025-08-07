<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
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
            'venue' => $this->faker->address,
            'availability' => $this->faker->randomElement(['available', 'unavailable']),
            'timestart' => $this->faker->time(),
            'timeend' => $this->faker->time(),
            'fees' => $this->faker->randomFloat(2, 0, 1000),
            'contact' => $this->faker->phoneNumber,
            'extraInfo' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['pending', 'in progress', 'Approved', 'Rejected']),
            'organizer' => $this->faker->company,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
