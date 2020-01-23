<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'home'], function () {
    Route::get('/config', 'SettingsController@index')->name('settings.index');
    Route::post('/config/update', 'SettingsController@update')->name('settings.update');
    Route::post('/config', 'SettingsController@store')->name('settings.add');


//    Route::group(['prefix' => 'gestion'], function () Ejemplo de agrupación de rutas
//    {
//    });



});
