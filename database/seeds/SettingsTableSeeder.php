<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('settings')->insert(

            [
                [
                    "name" => "Logo del sitio",
                    "key" => 'site_logo',
                    "value" => 'logo.png',
                ],
                [
                    "name" => "Banner correos",
                    "key" => 'site_banner',
                    "value" => 'banner.png',
                ],
                [
                    "name" => "Nombre del sitio",
                    "key" => 'site_name',
                    "value" => 'EcoStudents',
                ],
                [
                    "name" => "Descripción del sitio",
                    "key" => 'site_description',
                    "value" => 'Econsulting ECOStudents, Solución para Escuelas y Colegios',
                ],
                [
                    "name" => "Keywords",
                    "key" => 'site_keywords',
                    "value" => 'TAGS,Separado,por,comas',
                ],
                [
                    "name" => "Autor del sitio",
                    "key" => 'site_author',
                    "value" => 'econsulting.cr',
                ],
                [
                    "name" => "Derechos del sitio",
                    "key" => 'site_copy',
                    "value" => 'Todos los derechos reservados.',
                ],
                [
                    "name" => "Versión",
                    "key" => 'site_version',
                    "value" => '1.0',
                ],
                [
                    "name" => "GOOGLE ANALYTICS",
                    "key" => 'google_analytics_tracking_id',
                    "value" => 'UA-xxxxxxxxx-x',
                ],
            ]
        );
    }
}
