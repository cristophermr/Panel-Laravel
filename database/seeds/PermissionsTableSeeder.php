<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Permissions = [
            [
                "name" =>"ver parametros",
            ],
            [
                "name" =>"agregar parametros",
            ],
            [
                "name" =>"editar parametros",
            ],
            [
                "name" =>"ver usuarios",
            ],
            [
                "name" =>"agregar usuarios",
            ],
            [
                "name" =>"editar usuarios",
            ],
            [
                "name" =>"borrar usuarios",
            ],
            [
                "name" =>"ver roles",
            ],
            [
                "name" =>"agregar roles",
            ],
            [
                "name" =>"editar roles",
            ],
            [
                "name" =>"borrar roles",
            ],
        ];
        foreach ($Permissions as $permission)
        {
            $Per = new \Spatie\Permission\Models\Permission();
            $Per->name = $permission["name"];
            $Per->save();
            $role = \Spatie\Permission\Models\Role::findByName('Administrador');
            $role->givePermissionTo($permission["name"]);
        }

    }
}
