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
                    "name" => "Settings",
                    "slug" => 'home/config',
                    "route" => 'settings.index',
                    "icon" => 'fa fa-tools',
                    "parent" => 0,
                    "order" => 100
                ],
                [
                    "name" => "Dashboard",
                    "slug" => 'home',
                    "route" => 'home',
                    "icon" => 'fa fa-tachometer-alt',
                    "parent" => 0,
                    "order" => 1
                ],
         ]
        );
    }
}
