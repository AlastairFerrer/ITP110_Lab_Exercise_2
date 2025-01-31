<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\provinces>
 */
class ProvincesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'province_id' => $this->faker->unique()->numberBetween(1 , 9999),
            'region_id' => $this->faker->numberBetween(1 , 9999),
            'province_name' => $this->faker->unique()->word(),
        ];
    }
}
