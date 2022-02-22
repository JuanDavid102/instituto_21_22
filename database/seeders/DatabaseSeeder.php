<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
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
        //\App\Models\User::factory(10)->create();
        Curso::factory(50)->create();

        $admin = new User();
        $admin->usuario_av = 210625;

        $admin->name = "Juan David Massanet Puentes";
        $admin->email = "11236647@alu.murciaeduca.es";
        $admin->password = bcrypt("password");

        $admin->save();
    }
}
