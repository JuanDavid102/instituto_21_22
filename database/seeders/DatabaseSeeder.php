<?php

namespace Database\Seeders;

use App\Models\Materia;
use App\Models\MateriaImpartida;
use App\Models\Nota;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Nota::factory(10)->create();
        Materia::factory(30)->create();
        MateriaImpartida::factory(20)->create();
    }
}
