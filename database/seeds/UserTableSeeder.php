<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User  = new \App\User();
        $User->dni = "0";
        $User->name = "SysAdmin";
        $User->email = "admin@admin.com";
        $User->password = bcrypt('123456');
        $User->nationality = 'CRI';
        $User->province = '1';
        $User->canton = '01';
        $User->district = '01';
        $User->neighborhood = '01';
        $User->address = 'San Jose';
        $User->birthday = '1999-01-01';
        $User->save();
        $User->assignRole("Administrador");
    }
}
