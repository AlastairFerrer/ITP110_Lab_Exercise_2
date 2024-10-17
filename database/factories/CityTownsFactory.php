<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CityTowns>
 */
class CityTownsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'citytown_id' => $this->faker->unique()->numberBetween(1 , 9999),
            'province_id' => $this->faker->numberBetween(1 , 9999),
            'citytown_name' => $this->faker->unique()->word(),
        ];
    }
}
