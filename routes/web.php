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


/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

$this->group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
    $this->resource('produtos', 'ProductController');
    $this->resource('categorias', 'CategoryController');

    $this->get('pedidos', 'PediminController@index')->name('user-pedido.index');
    $this->get('pedido-detalhe/produtos/{pedido_id}', 'PediminController@pedidos')->name('pedido.detalhe');
    $this->get('pedido-pronto/{pedido_id}', 'PediminController@pedidoPronto')->name('pedido-pronto');


    $this->get('historico', 'PediminController@historic')->name('historic');

});

$this->group(['namespace' => 'Admin\Painel', 'prefix' => 'admin/painel', 'middleware' => 'auth'], function() {
    $this->get('', 'PainelController@index')->name('painel');

});

$this->group(['namespace' => 'Client', 'prefix' => 'pedidos/', 'middleware' => 'auth'], function() {

    $this->get('configuracoes', 'AddressController@config')->name('config.client');
    $this->get('configuracoes/end', 'AddressController@configEnd')->name('end.config');
    $this->get('endereco/novo', 'AddressController@create')->name('end.create');
    $this->post('endereco/novo', 'AddressController@endPost')->name('end.store');
    
    

    $this->get('', 'PedidoController@index')->name('pedidos.index');
    $this->get('store', 'PedidoController@store')->name('pedidos.store');
    $this->get('create', 'PedidoController@create')->name('pedidos.create');
    
    $this->get('{id}', 'PedidoController@show')->name('pedidos.show');

    $this->get('create/{id}', 'PedidoController@productsCategory')->name('products.category');

    

});

$this->get('/', 'Site\SiteController@index')->name('site');

