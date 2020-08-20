<?php

use Illuminate\Support\Facades\Route;

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

Route::get('tours', 'ToursController@getAll');

Route::get('tours/{tour}', 'ToursController@getOne')->where('tour', '[0-9]+');

Route::post('tours', 'ToursController@post');

Route::put('tours/{tour}', 'ToursController@update')->where('tour', '[0-9]+');

Route::delete('tours/{tour}', 'ToursController@delete')->where('tour', '[0-9]+');