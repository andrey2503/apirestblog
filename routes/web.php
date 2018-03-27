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

Route::get('/componentes','UIController@listaUI');
Route::get('agregarui','UIController@vistaagregarui');
Route::post('agregaruic','UIController@agregarui');

Route::get('/blog','BlogController@index');
Route::get('/createblog','BlogController@create');
Route::get('/editarblog/{id}','BlogController@show');
Route::post('/agregarblog','BlogController@store');
Route::post('/editarblog','BlogController@update');


