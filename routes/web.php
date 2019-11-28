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
Route::get('/servicos', 'ServicoController@list')->name('listar_servicos');

Route::get('/servicos/criar', 'ServicoController@create')->name('criar_servico');

Route::post('/servicos/criar', 'ServicoController@store');


#Rotas da transação
Route::get('/transacoes', 'TransacaoController@list')->name('listar_transacoes');

Route::get('/transacoes/criar', 'TransacaoController@create')->name('criar_transacao');

Route::post('/transacoes/criar', 'TransacaoController@store');


#Rotas da origem da transação
Route::get('/origens', 'OrigemTransacaoController@list')->name('listar_origens');

Route::get('/origens/criar', 'OrigemTransacaoController@create')->name('criar_origem');

Route::post('/origens/criar', 'OrigemTransacaoController@store');


#Rotas do fornecedor
Route::get('/fornecedor', 'FornecedorController@list')->name('listar_fornecedores');

Route::get('/fornecedor/criar', 'FornecedorController@create')->name('criar_fornecedor');

Route::post('/fornecedor/criar', 'FornecedorController@store');

