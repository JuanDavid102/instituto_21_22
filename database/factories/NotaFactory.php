<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(1,10),
            "materia_id" => $this->faker->numberBetween(1,30),
            "evaluacion" => $this->faker->numberBetween(1,3) . "ª",
            "nota" => $this->faker->numberBetween(1,10)
        ];
    }
}
