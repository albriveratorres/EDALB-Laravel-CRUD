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
/*
Route::get('/', function () {
    return view('welcome');
});*/

//---------------rutas de EspaceController-----------------------------------------------------------
//--------------------------------------------------------------------------------------------------
Route::get('/inicio', 'EspaceController@inicio');

Route::get('/', 'EspaceController@inicio');

Route::get('/conocimientosdestacados', 'EspaceController@conocimientosdestacados');

//-----------------rutas de ProductosController------------------------------------------------------
//--------------------------------------------------------------------------------------------------

Route::resource('/productos','ProductosController');
/*
Route::get('/crear', 'ProductosController@create');

Route::get('/insertar', 'ProductosController@store');

Route::get('/actualizar', 'ProductosController@update');

Route::get('/borrar', 'ProductosController@destroy');
*/


