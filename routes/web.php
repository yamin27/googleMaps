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
    return view('welcome');
});


Route::get('map', 'MapController@map');
Route::get('map/multiple', 'MapController@multiple_map_maker');
Route::get('map/geocache', 'MapController@geocaching');
Route::get('map/direction', 'MapController@direction');
Route::get('googlemap/direction', 'MapController@direction');