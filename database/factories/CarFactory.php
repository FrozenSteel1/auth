<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;


class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'brand' => $this->faker->company(),
            'price' => $this->faker->numberBetween(2000000,5000000),
        ];
    }
}
