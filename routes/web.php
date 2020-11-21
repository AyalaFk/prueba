<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/role', 'RoleController')->names('role');
Route::resource('/pago', 'PagoController')->names('pago');

 Route::resource('usuarios','UsuarioController');
 Route::get('usuarios/{id}/edit/','UsuarioController@edit');

Route::get('/obtenerpagos', 'PagoController@obtenerpagos')->name('obtenerpagos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/exportar', 'HomeController@export');
Route::get('/exportarexcel', 'HomeController@exportExcel');
