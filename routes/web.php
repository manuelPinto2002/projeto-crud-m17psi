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
    return view('welcome');
});


Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes.index');
Route::get('/clientes/{id}/show', 'App\Http\Controllers\ClientesController@show')->name('clientes.show');


Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index')->name('produtos.index');
Route::get('/produtos/{id}/show', 'App\Http\Controllers\ProdutosController@show')->name('produtos.show');


Route::get('/encomendas', 'App\Http\Controllers\EncomendasController@index')->name('encomendas.index');
Route::get('/encomendas/{id}/show', 'App\Http\Controllers\EncomendasController@show')->name('encomendas.show');


Route::get('/vendedores', 'App\Http\Controllers\VendedoresController@index')->name('vendedores.index');
Route::get('/vendedores/{id}/show', 'App\Http\Controllers\VendedoresController@show')->name('vendedores.show');


Route::get('/encomendas_produtos', 'App\Http\Controllers\Encomendas_produtosController@index')->name('encomendas_produtos.index');
Route::get('/encomendas_produtos/{id}/show', 'App\Http\Controllers\Encomendas_produtosController@show')->name('encomendas_produtos.show');


//create
route::get('/clientes/create', 'App\http\Controllers\ClientesController@create')->name('clientes.create');
route::get('/encomendas/create', 'App\http\Controllers\EncomendasController@create')->name('encomendas.create');
route::get('/produtos/create', 'App\http\Controllers\ProdutosController@create')->name('produtos.create');
route::get('/vendedores/create', 'App\http\Controllers\VendedoresController@create')->name('vendedores.create');
route::get('/encomendas_produtos/create', 'App\http\Controllers\Encomendas_produtosController@create')->name('encomendas_produtos.create');


//store
route::post('/clientes', 'App\http\Controllers\ClientesController@store')->name('clientes.store');
route::post('/encomendas', 'App\http\Controllers\EncomendasController@store')->name('encomendas.store');
route::post('/produtos', 'App\http\Controllers\ProdutosController@store')->name('produtos.store');
route::post('/vendedores', 'App\http\Controllers\VendedoresController@store')->name('vendedores.store');
route::post('/encomendas_produtos', 'App\http\Controllers\Encomendas_produtosController@store')->name('encomendas_produtos.store');

//update e pach
route::get('/clientes/{id}/edit', 'App\http\Controllers\ClientesController@edit')->name('clientes.edit')->middleware('auth');
route::patch('/clientes', 'App\http\Controllers\ClientesController@update')->name('clientes.update')->middleware('auth');
route::get('/encomendas/{id}/edit', 'App\http\Controllers\EncomendasController@edit')->name('encomendas.edit')->middleware('auth');
route::patch('/encomendas', 'App\http\Controllers\EncomendasController@update')->name('encomendas.update')->middleware('auth');
route::get('/produtos/{id}/edit', 'App\http\Controllers\ProdutosController@edit')->name('produtos.edit')->middleware('auth');
route::patch('/produtos', 'App\http\Controllers\ProdutosController@update')->name('produtos.update')->middleware('auth');
route::get('/vendedores/{id}/edit', 'App\http\Controllers\VendedoresController@edit')->name('vendedores.edit')->middleware('auth');
route::patch('/vendedores', 'App\http\Controllers\VendedoresController@update')->name('vendedores.update')->middleware('auth');
route::get('/encomendas_produtos/{id}/edit', 'App\http\Controllers\encomendas_produtosController@edit')->name('encomendas_produtos.edit')->middleware('auth');
route::patch('/encomendas_produtos', 'App\http\Controllers\encomendas_produtosController@update')->name('encomendas_produtos.update')->middleware('auth');


//Delete

route::get('/clientes/{id}/delete', 'App\http\Controllers\ClientesController@delete')->name('clientes.delete')->middleware('auth');
route::delete('/clientes', 'App\http\Controllers\ClientesController@destroy')->name('clientes.destroy')->middleware('auth');
route::get('/encomendas/{id}/delete', 'App\http\Controllers\EncomendasController@delete')->name('encomendas.delete')->middleware('auth');
route::delete('/encomendas', 'App\http\Controllers\EncomendasController@destroy')->name('encomendas.destroy')->middleware('auth');
route::get('/produtos/{id}/delete', 'App\http\Controllers\ProdutosController@delete')->name('produtos.delete')->middleware('auth');
route::delete('/produtos', 'App\http\Controllers\ProdutosController@destroy')->name('produtos.destroy')->middleware('auth');
route::get('/vendedores/{id}/delete', 'App\http\Controllers\VendedoresController@delete')->name('vendedores.delete')->middleware('auth');
route::delete('/vendedores', 'App\http\Controllers\VendedoresController@destroy')->name('vendedores.destroy')->middleware('auth');
route::get('/encomendas_produtos/{id}/delete', 'App\http\Controllers\encomendas_produtosController@delete')->name('encomendas_produtos.delete')->middleware('auth');
route::delete('/encomendas_produtos', 'App\http\Controllers\encomendas_produtosController@destroy')->name('encomendas_produtos.destroy')->middleware('auth');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
