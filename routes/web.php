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
Route::get('/incidencias', 'IncidenciaController@listar')->name('incidencia.listar');
Route::post('/incidencias/agregar', 'IncidenciaController@nuevoCampo');
Route::get('/incidencias/crear', 'IncidenciaController@formulario')->name('incidencia.nueva');
Route::get('/incidencias/eliminar/{id}', 'IncidenciaController@eliminar');
Route::get('/incidencias/pdf','IncidenciaController@pdf');
Route::get('/incidencias/detalle/{id}','IncidenciaController@detalles');
/****************/
/** PROFESORES **/
Route::get('/usuarios', 'UserController@listar')->name('usuario.listar');
Route::get('/usuarios/admin/{id}','UserController@hacerAdmin');
Route::get('/usuarios/importar','UserController@formularioImportar')->name('profesores.import');
Route::get('/usuarios/exportarexcel','UserController@export');
Route::post('/usuarios/importarexcel', 'UserController@import');
Route::get('/usuarios/detalle/{id}','UserController@detalles');
Route::get('/usuarios/crear', 'UserController@formularioNuevo');
Route::post('/usuarios/nuevo','UserController@nuevo');
/****************/
/** LOGS **/
Route::get('/logs', 'LogController@listar');
Route::get('/logs/pdf','LogController@pdf');
/**********/
/** MENSAJES **/
Route::get('/mensajes','MensajeController@listar')->name('mensaje.listar');
Route::get('/mensajes/crear','MensajeController@crear');
Route::post('/mensajes/nuevo', 'MensajeController@nuevoCampo');
Route::get('/mensajes/pdf', 'MensajeController@pdf');
Route::get('/mensajes/detalle/{id}','MensajeController@detalle');
/**************/