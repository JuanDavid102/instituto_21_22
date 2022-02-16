<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CentroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "codigo" => $this->faker->numberBetween(3000000,3009999),
            "nombre" => 'I.E.S ' . $this->faker->company(),
            "verificado" => 1,
            "web" => 'www.' . $this->faker->domainName(),
        ];
    }
}
