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
//produtos
Route::get('/produtos/listar', 'ProductController@listar')->name('produtos.listar');
Route::post('/produtos/cadastrar', 'ProductController@create');
Route::post('/produtos/listar', 'ProductController@store');
Route::get('/produtos/{id}/edit', 'ProductController@edit');
Route::put('/produtos/{id}/', 'ProductController@update');
Route::delete('/produtos/{id}/delete', 'ProductController@destroy');

//categorias
Route::get('/categorias/listar', 'CategoryController@listar')->name('categorias.listar');
Route::post('/categorias/cadastrar', 'CategoryController@create');
Route::get('/categorias/{id}/edit', 'CategoryController@edit');
Route::post('/categorias/listar', 'CategoryController@store');
Route::delete('/categorias/{id}/delete', 'CategoryController@destroy');

