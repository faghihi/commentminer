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

Route::get('/', function () {
    return view('index');
});
Route::get('/Pannel', function () {
    return view('Pannel/index');
});
Route::get('/UserArea', 'UserControl@getLogin')->middleware('LoginProof');
Route::get('/Plans','ServiceControl@RetrieveOptions');
Route::get('/Services','ServiceControl@RetrieveMine');
Route::get('/test', 'UserControl@test');