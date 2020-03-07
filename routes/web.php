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
Route::post('/agregar', 'IncidenciaController@nuevoCampo');
Route::get('/crear', 'IncidenciaController@formulario')->name('incidencia.nueva');
Route::get('/eliminar/{id}', 'IncidenciaController@eliminar');
Route::get('/incidenciasPdf',);
/****************/
/** PROFESORES **/
Route::get('/usuarios', 'UserController@listar');
/****************/
/** LOGS **/
Route::get('/logs', 'LogController@listar');
/**********/