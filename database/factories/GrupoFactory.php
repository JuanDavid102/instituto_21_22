<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "curso" => $this->faker->numberBetween(1,6),
            "letra" => $this->faker->randomLetter(),
            "nombre" => $this->faker->word(),
            "anyoescolar" => $this->faker->numberBetween(1,3),
            "nivel" => $this->faker->numberBetween(1,5),
            "creador" => $this->faker->numberBetween(1,10),
            "tutor" => $this->faker->numberBetween(1,10),
            "verificado" => false,
        ];
    }
}
