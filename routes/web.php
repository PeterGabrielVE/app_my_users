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

// Ruta Página Principal
Route::get('/', 'UsersController@index')->name('admin/users');

// Rutas CRUD USERS
/* Crear */
Route::get('admin/users/crear', 'UsersController@crear')->name('admin/users/crear');
Route::put('admin/users/store', 'UsersController@store')->name('admin/users/store');
/* Leer */
Route::get('admin/users', 'UsersController@index')->name('admin/users');
/* Actualizar */
Route::get('admin/users/actualizar/{id}', 'UsersController@actualizar')->name('admin/users/actualizar');
Route::put('admin/users/update/{id}', 'UsersController@update')->name('admin/users/update');
/* Eliminar */
Route::put('admin/users/eliminar/{id}', 'UsersController@eliminar')->name('admin/users/eliminar');

// Rutas CRUD CARGOS
/* Crear */
Route::get('admin/cargos/crear', 'CargosController@crear')->name('admin/cargos/crear');
Route::put('admin/cargos/store', 'CargosController@store')->name('admin/cargos/store');
/* Leer */
Route::get('admin/cargos', 'CargosController@index')->name('admin/cargos');
/* Actualizar */
Route::get('admin/cargos/actualizar/{id}', 'CargosController@actualizar')->name('admin/cargos/actualizar');
Route::put('admin/cargos/update/{id}', 'CargosController@update')->name('admin/cargos/update');
/* Eliminar */
Route::put('admin/cargos/eliminar/{id}', 'CargosController@eliminar')->name('admin/cargos/eliminar');
