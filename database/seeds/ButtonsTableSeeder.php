<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ButtonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buttons')->insert(
            [
                [
                    "id_action" => 1,
                    "id_permission" => 2,
                    "content" => "config.form",
                    "route"   => "settings.add",
                    "jsid"   => "add",
                ],
                [
                    "id_action" => 2,
                    "id_permission" => 3,
                    "content" => "config.form",
                    "route"   => "settings.update",
                    "jsid"   => "edit",
                ],
                [
                    "id_action" => 1,
                    "id_permission" => 4,
                    "content" => "Users.form",
                    "route"   => "users.add",
                    "jsid"   => "add",
                ],
                [
                    "id_action" => 2,
                    "id_permission" => 5,
                    "content" => "Users.editform",
                    "route"   => "users.update",
                    "jsid"   => "edit",
                ],
                [
                    "id_action" => 3,
                    "id_permission" => 6,
                    "content" => ".",
                    "route"   => "users.delete",
                    "jsid"   => "delete",
                ],
                [
                    "id_action" => 1,
                    "id_permission" => 7,
                    "content" => "Roles.form",
                    "route"   => "roles.add",
                    "jsid"   => "add",
                ],
                [
                    "id_action" => 2,
                    "id_permission" => 8,
                    "content" => "Roles.form",
                    "route"   => "roles.update",
                    "jsid"   => "edit",
                ],
                [
                    "id_action" => 3,
                    "id_permission" => 9,
                    "content" => ".",
                    "route"   => "roles.delete",
                    "jsid"   => "delete",
                ],
            ]
        );
    }
}
