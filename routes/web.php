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
    Route::group(['prefix' => 'settings'], function ()
    {
        // Urls de Parametrización de sistema
        Route::get('/config', 'SettingsController@index')->name('settings.index');
        Route::post('/config/update', 'SettingsController@update')->name('settings.update');
        Route::post('/config', 'SettingsController@store')->name('settings.add');

        // Usuarios del sistema
        Route::get('/users', 'UsersController@index')->name('users.index');
        Route::post('/users/update', 'UsersController@update')->name('users.update');
        Route::post('/users', 'UsersController@store')->name('users.add');
        Route::post('/users/delete', 'UsersController@destroy')->name('users.delete');

        // Roles del sistema
        Route::get('/roles', 'RolesController@index')->name('roles.index');
        Route::post('/roles/update', 'RolesController@update')->name('roles.update');
        Route::post('/roles', 'RolesController@store')->name('roles.add');
        Route::post('/roles/delete', 'RolesController@destroy')->name('roles.delete');

    });



});
