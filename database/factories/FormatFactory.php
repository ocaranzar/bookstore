<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Format>
 */
class FormatFactory extends Factory
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
            "pages" => $this->faker->numberBetween(250, 400),
            "isbn" => $this->faker->isbn13,
            "realese_date" => $this->faker->date(),
            "book_id" => $this->faker->numberBetween(1, 50),
        ];
    }
}
