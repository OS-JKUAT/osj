<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MissingPerson;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MissingPerson>
 */
class MissingPersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = MissingPerson::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => function (array $attributes) {
                return Str::slug($attributes['name']);
            },
            'nickname' => $this->faker->optional()->word,
            'age' => $this->faker->optional()->numberBetween(1, 100),
            'gender' => $this->faker->optional()->randomElement(['Male', 'Female', 'Other']),
            'hashtag' => $this->faker->optional()->word,
            'hair' => $this->faker->optional()->randomElement(['blue', 'green', 'brown', 'pink', 'braids', 'shaved']),
            'eyes' => $this->faker->optional()->randomElement(['blue', 'green', 'brown', 'black']),
            'language' => $this->faker->optional()->randomElement(['Swahili', 'English', 'Athi']),
            'citizenship'=> $this->faker->country,
            'poster' => null, // Default to no image
            'last_seen_location' => $this->faker->optional()->city,
            'place_of_birth' => $this->faker->optional()->city,
            'date_last_seen' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
            'dob' => $this->faker->optional()->dateTimeBetween('-100 years', '-1 year'),
            'description' => $this->faker->optional()->paragraph,
            'suspicion' => $this->faker->optional()->word,
            'reporter_name' => $this->faker->name,
            'reporter_contact' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['missing', 'found']),
            'status_description' => $this->faker->optional()->sentence,
        ];
    }
}
