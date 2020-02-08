<?php

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
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(ButtonsTableSeeder::class);
    }
}
