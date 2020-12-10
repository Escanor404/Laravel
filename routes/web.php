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

$dir = 'App\\Http\\Controllers\\';

Route::get('/', $dir.'ProdutosController@index')->name('lista-produtos');

Route::get('/produtos/add', $dir.'ProdutosController@add')->name('adicionar-produtos');

Route::post('/produtos/store', $dir.'ProdutosController@store')->name('salvar-produto');

Route::post('/produtos/delete', $dir.'ProdutosController@destroy')->name('elimar-produto');

Route::get('/produtos/edit', $dir.'ProdutosController@edit')->name('editar-produto');

Route::get('/produtos/search', $dir.'ProdutosController@find')->name('search-produto');