<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NivelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->colorName(),
            'nivel_superior' => random_int(1,6)
        ];
    }
}