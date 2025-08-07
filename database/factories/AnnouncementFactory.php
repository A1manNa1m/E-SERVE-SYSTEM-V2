<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
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
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->paragraph,
            'type' => $this->faker->word,
            'category' => $this->faker->word,
            'audience' => $this->faker->word,
            'date' => $this->faker->date(),
            'timestart' => $this->faker->time(),
            'timeend' => $this->faker->time(),
            'contact' => $this->faker->phoneNumber,
            'extraInfo' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['pending', 'in progress', 'Approved', 'Rejected']),
            'organizer' => $this->faker->company,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
