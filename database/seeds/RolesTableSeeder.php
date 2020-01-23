<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                ["name" => "Administrador", "guard_name" => "web"],
                ["name" => "Director", "guard_name" => "web"],
                ["name" => "Coordinador", "guard_name" => "web"],
                ["name" => "Profesor", "guard_name" => "web"],
                ["name" => "Estudiante", "guard_name" => "web"],
                ["name" => "Encargado Legal", "guard_name" => "web"],
            ]
        );
    }
}
