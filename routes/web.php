<?php
use App\Http\Controllers\Auth\Type;
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


Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('inicio');
});
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');

/** INCIDENCIAS **/
Route::get('/incidencias', 'IncidenciaController@listar');
Route::post('/incidencias/agregar', 'IncidenciaController@nuevoCampo');
Route::get('/incidencias/crear', 'IncidenciaController@formulario')->name('incidencia.nueva');
Route::get('/incidencias/eliminar/{id}', 'IncidenciaController@eliminar');
Route::get('/incidencias/pdf','IncidenciaController@pdf');

/****************/
/** PROFESORES **/
Route::get('/usuarios/{cantidad?}', 'UserController@listar')->name('usuario.listar');
Route::get('/usuarios/admin/{id}','UserController@hacerAdmin');
Route::get('/usuarios/importar','UserController@formularioImportar')->name('profesores.import');
Route::get('/usuarios/exportarexcel','UserController@export');
Route::post('/usuarios/importarexcel', 'UserController@import');

/****************/
/** LOGS **/
Route::get('/logs', 'LogController@listar');
/**********/