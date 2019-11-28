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

#Rotas do cliente
Route::get('/', 'ClienteController@index')->name('index_clientes');

Route::get('/clientes', 'ClienteController@list')->name('listar_clientes');

Route::get('/clientes/criar', 'ClienteController@create')->name('criar_cliente');

Route::any('/clientes/pesquisa', 'ClienteController@search')->name('pesquisar_cliente');

Route::get('/clientes/detalhes/{id}', 'ClienteController@detail');

Route::get('/clientes/alterar/{id}', 'ClienteController@edit');

Route::put('/clientes/alterar/{id}', 'ClienteController@update');

Route::post('/clientes/criar', 'ClienteController@store');

Route::delete('/clientes/{id}', 'ClienteController@destroy');

#Rotas do produto
Route::get('/produtos', 'ProdutoController@list')->name('listar_produtos');

Route::get('/produtos/criar', 'ProdutoController@create')->name('criar_produto');

Route::post('/produtos/criar', 'ProdutoController@store');
#Rotas do serviço


#Rotas da transação


#Rotas da origem da transação


#Rotas do fornecedor

