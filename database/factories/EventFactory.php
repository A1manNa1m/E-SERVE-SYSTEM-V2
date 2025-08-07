<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'type' => $this->faker->word,
            'venue' => $this->faker->address,
            'date' => $this->faker->date(),
            'timestart' => $this->faker->time(),
            'timeend' => $this->faker->time(),
            'fees' => $this->faker->randomNumber(2),
            'contact' => $this->faker->phoneNumber,
            'registration' => $this->faker->url,
            'organizer' => $this->faker->company,
            'extraInfo' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['pending', 'in progress', 'Approved', 'Rejected']),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
