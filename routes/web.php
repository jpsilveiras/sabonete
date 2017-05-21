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

Auth::routes();

Route::get('/admin', 'HomeController@index');

Route::get('/logout', function() {

	Auth::logout();
	return redirect('/');

});

	// -----------------------  CLIENTES  --------------------------- //

	//-- CLIENTES LISTAR--
	Route::get('clientes', 'ClientController@index');


	//-- CLIENTES PESQUISAR--
	Route::get('clientes/search', ['as' => 'clientes/search', 'uses' => 'ClientController@search']);

	//-- CLIENTES NOVO --
	Route::get('clientes/novo', 'ClientController@create');
	Route::post('clientes/salvar', 'ClientController@store');

	//-- CLIENTES EDITAR --
	Route::get('clientes/{cliente}/editar', 'ClientController@edit');
	Route::patch('clientes/{cliente}', 'ClientController@update');

	//-- CLIENTES MOSTRAR --
	Route::get('clientes/{cliente}/mostrar', 'ClientController@show');


	//-- CLIENTES DELETAR -->
	Route::get('clientes/{cliente}/excluir', 'ClientController@destroy');