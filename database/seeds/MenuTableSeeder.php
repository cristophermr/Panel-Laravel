<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert(

            [
                [
                "name" => "Dashboard",
                "slug" => 'home',
                "route" => 'home',
                "icon" => 'fa fa-tachometer-alt',
                "parent" => 0,
                "order" => 1
                ],
                [
                    "name" => "Configuración",
                    "slug" => 'home/settings',
                    "route" => '',
                    "icon" => 'fa fa-tools',
                    "parent" => 0,
                    "order" => 100
                ],
                [
                    "name" => "Parametrización",
                    "slug" => 'home/settings/config',
                    "route" => 'settings.index',
                    "icon" => 'fa fa-tools',
                    "parent" => 2,
                    "order" => 100
                ],
                [
                    "name" => "Usuarios",
                    "slug" => 'home/settings/users',
                    "route" => 'users.index',
                    "icon" => 'fa fa-tools',
                    "parent" => 2,
                    "order" => 0
                ],
                [
                    "name" => "Roles",
                    "slug" => 'home/settings/roles',
                    "route" => 'roles.index',
                    "icon" => 'fa fa-tools',
                    "parent" => 2,
                    "order" => 1
                ],


         ]
        );
    }
}
