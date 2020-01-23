<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/***
 * API para consumir ubicaciones
 */
Route::get('getcantons/{DIVISION1}','API\LocationsController@getCantones')->name('Cantons');
Route::get('getdistricts/{DIVISION1}/{DIVISION2}','API\LocationsController@getDistritos')->name('Districts');
Route::get('getneighborhoods/{DIVISION1}/{DIVISION2}/{DIVISION3}','API\LocationsController@getBarrios')->name('Neighborhood');

