<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        SETEO DE MINIMO DE CARACTERES DE MIGRACIONES
        Schema::defaultStringLength(191);
//        CARGA DE CONFIGURACIONES DEL SITIO
        if (Schema::hasTable('settings')) {
            foreach (Setting::all() as $setting) {
                Config::set('settings.'.$setting->key, $setting->value);
            }
//         CARGA DEL MENU DE NAVEGACION EN EL SITIO
            view()->composer('layouts.backend', function($view) {
                $view->with('menus', Menu::menus());
            });
        }
    }
}
