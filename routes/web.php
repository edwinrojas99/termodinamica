<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome','contactoController@inicio')->name('welcome');
Route::get('/contacto','contactoController@index')->name('contacto');
Route::get('/sobrenosotros','contactoController@sobrenos')->name('sobrenosotros');
Route::get('/productos','contactoController@pro')->name('productos');
Route::get('/division','contactoController@div')->name('division');
Route::post('/contacto','contactoController@store');