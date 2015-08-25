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

    return view('dmed.index');
});

Route::get('/teste', function () {

    return view('index');
});

Route::get('cliente','ClienteController@index');
Route::get('cliente/{id}','ClienteController@show');
Route::get('cliente/{id}/delete','ClienteController@destroy');

Route::get('empresa',['as' => 'empresa.index','uses' => 'EmpresaController@index']);
Route::get('empresa/cadastrar',['as' => 'empresa.create','uses' => 'EmpresaController@create']);
Route::post('empresa',['as' => 'empresa.store','uses' => 'EmpresaController@store']);
Route::put('empresa/{id}/atualizar',['as' => 'empresa.update','uses' =>'EmpresaController@update']);
Route::get('empresa/{id}/editar',['as' => 'empresa.edit','uses' =>'EmpresaController@edit']);
Route::get('empresa/{id}/exclur',['as' => 'empresa.destroy','uses' =>'EmpresaController@destroy']);

Route::get('notas','NotaController@index');
Route::get('notas/{numero}','NotaController@show');

Route::get('usuario',['as' => 'usuario.index','uses' =>'UserController@index']);
Route::get('usuario/cadastrar',['as' => 'usuario.create','uses' =>'UserController@create']);
Route::get('usuario/{id}/editar',['as' => 'usuario.edit','uses' =>'UserController@edit']);
Route::get('usuario/{id}/visualizar',['as' => 'usuario.show','uses' =>'UserController@show']);
Route::post('usuario',['as' => 'usuario.store','uses' => 'UserController@store']);
Route::put('usuario/{id}/atualizar',['as' => 'usuario.update','uses' => 'UserController@update']);
Route::get('usuario/{id}/excluir',['as' => 'usuario.destroy','uses' =>'UserController@destroy']);

Route::get('usuario/{userId}/empresa/{empresaId}/delete',['as' => 'usuario.empresa.destroy','uses' =>'UserController@removeEmpresa']);
Route::post('usuario/empresa',['as' => 'usuario.empresa.store','uses' =>'UserController@addEmpresaStore']);

Route::get('usuario/{id}/empresa',['as' => 'usuario.empresa.create','uses' =>'UserController@addEmpresaCreate']);
