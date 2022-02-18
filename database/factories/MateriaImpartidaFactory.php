<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaImpartidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "docente" => $this->faker->numberBetween(1,20),
            "grupo" => $this->faker->numberBetween(1,20),
            "materia" => $this->faker->numberBetween(1,20)
        ];
    }
}
