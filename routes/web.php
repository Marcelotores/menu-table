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

Route::get('/home', 'HomeController@index')->name('home');

$this->group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    $this->resource('produtos', 'ProductController');
    $this->resource('categorias', 'CategoryController');

});

$this->group(['namespace' => 'Admin\Painel', 'prefix' => 'admin/painel'], function() {
    $this->get('', 'PainelController@index')->name('painel');

});

$this->group(['namespace' => 'Client', 'prefix' => 'pedidos/'], function() {
    $this->get('', 'PedidoController@index')->name('pedidos.index');
    $this->get('store', 'PedidoController@store')->name('pedidos.store');
    $this->get('create', 'PedidoController@create')->name('pedidos.create');
    
    $this->get('{id}', 'PedidoController@show')->name('pedidos.show');

    $this->get('create/{id}', 'PedidoController@productsCategory')->name('products.category');
    
    

});

