<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{

    private function randomChar()
    {
        $decision = random_int(1,6);
        switch ($decision) {
            case 1:
                $resultado = 'A';
                break;
            case 2:
                $resultado = 'B';
                break;
            case 3:
                $resultado = 'C';
                break;
            case 4:
                $resultado = 'D';
                break;
            case 5:
                $resultado = 'E';
                break;
            case 6:
                $resultado = 'F';
                break;

        }

        return $resultado;
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'curso' => $this->random_int(1, 6),
            'letra' => $this->randomChar(),
            'nombre' => $this->faker->name(),
            'tutor' => $this->faker->randomNumber(),
            'anyoescolar' => $this->faker->year(),
            'nivel' => $this->random_int(1, 6),
            'verificado' => $this->faker->boolean(),
            'creador' => $this->faker->randomNumber()
        ];
    }
}
