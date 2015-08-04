<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente','ClienteController@index');
Route::get('cliente/{id}','ClienteController@show');
Route::get('cliente/{id}/delete','ClienteController@destroy');

Route::get('empresa','EmpresaController@index');
Route::get('empresa/{id}','EmpresaController@show');
Route::get('empresa/{id}/delete','EmpresaController@destroy');

Route::get('usuario','UserController@index');
Route::get('usuario/{id}','UserController@show');
Route::get('usuario/{id}/empresa/{empresaId}/delete','UserController@removeEmpresa');
Route::get('usuario/{id}/empresa/{empresaId}/insert','UserController@addEmpresa');