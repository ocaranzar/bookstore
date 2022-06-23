<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "cover" => $this->faker->image("storage/app/public/"),
            "author_id" => $this->faker->numberBetween(1, 50),
            "publisher_id" => $this->faker->numberBetween(1, 50),
            "genre_id" => $this->faker->numberBetween(1, 50),
        ];
    }
}
