<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/api/addView', 'ApiController@addView');


Route::get('/export.csv', 'HomeController@export');
Route::post('/save', 'HomeController@create');
Route::get('/', 'HomeController@index');