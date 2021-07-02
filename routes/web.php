<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'admin'], function () use ($router) {
	$app=$router;

    $app->get('clientes', 'ClientesController@list');
    $app->get('cliente/{id}', 'ClientesController@create');
    $app->post('cliente/{id}', 'ClientesController@get');
    $app->post('cliente-edit/{id}', 'ClientesController@edit');
    $app->put('cliente/{id}', 'ClientesController@update');
    $app->delete('cliente/{id}', 'ClientesController@delete');

    $app->get('produtos', 'ProdutosController@list');
    $app->get('produtos/{id}', 'ProdutosController@create');
    $app->post('produto/{id}', 'ProdutosController@get');
    $app->post('produto-edit/{id}', 'ProdutosController@edit');
    $app->put('produto/{id}', 'ProdutosController@update');
    $app->delete('produto/{id}', 'ProdutosController@delete');

    $app->get('categorias', 'CategoriasController@list');
    $app->get('categorias/{id}', 'CategoriasController@create');
    $app->post('categoria/{id}', 'CategoriasController@get');
    $app->post('categoria-edit/{id}', 'CategoriasController@edit');
    $app->put('categoria/{id}', 'CategoriasController@update');
    $app->delete('categoria/{id}', 'CategoriasController@delete');

    $app->get('subcategorias', 'SubcategoriasController@list');
    $app->get('subcategorias/{id}', 'SubcategoriasController@create');
    $app->post('subcategoria/{id}', 'SubcategoriasController@get');
    $app->post('subcategoria-edit/{id}', 'SubcategoriasController@edit');
    $app->put('subcategoria/{id}', 'SubcategoriasController@update');
    $app->delete('subcategoria/{id}', 'SubcategoriasController@delete');

    $app->get('atributos', 'AtributosController@list');
    $app->get('atributos/{id}', 'AtributosController@create');
    $app->post('atributos/{id}', 'AtributosController@get');
    $app->post('atributos-edit/{id}', 'AtributosController@edit');
    $app->put('atributos/{id}', 'AtributosController@update');
    $app->delete('atributos/{id}', 'AtributosController@delete');

    $app->get('grupos', 'GruposController@list');
    $app->post('grupos', 'GruposController@create');
    $app->post('grupos/{id}', 'GruposController@get');
    $app->post('grupo-edit/{id}', 'GruposController@edit');
    $app->put('grupos/{id}', 'GruposController@update');
    $app->delete('grupos/{id}', 'GruposController@delete');

    $app->get('imagens', 'ImagensController@list');
    $app->get('imagens/{id}', 'ImagensController@create');
    $app->post('imagens/{id}', 'ImagensController@get');
    $app->post('imagens/{id}', 'ImagensController@edit');
    $app->put('imagens-edit/{id}', 'ImagensController@update');
    $app->delete('imagens/{id}', 'ImagensController@delete');

    $app->get('banners', 'BannersController@list');
    $app->get('banners/{id}', 'BannersController@create');
    $app->post('banners/{id}', 'BannersController@get');
    $app->post('banners/{id}', 'BannersController@edit');
    $app->put('banners-edit/{id}', 'BannersController@update');
    $app->delete('banners/{id}', 'BannersController@delete');

    $app->get('usuarios', 'UsuariosController@list');
    $app->post('usuarios', 'UsuariosController@create');
    $app->get('usuarios/{id}', 'UsuariosController@get');
    $app->post('usuarios-edit/{id}', 'UsuariosController@edit');
    $app->put('usuarios/{id}', 'UsuariosController@update');
    $app->delete('usuarios/{id}', 'UsuariosController@delete');

    $app->get('pedidos', 'PedidosController@list');
    $app->get('pedidos/{id}', 'PedidosController@create');
    $app->post('pedidos/{id}', 'PedidosController@get');
    $app->post('pedidos/{id}', 'PedidosController@edit');
    $app->put('pedidos-edit/{id}', 'PedidosController@update');
    $app->delete('pedidos/{id}', 'PedidosController@delete');

    $app->get('parceiros', 'ParceirosController@list');
    $app->get('parceiros/{id}', 'ParceirosController@create');
    $app->post('parceiros/{id}', 'ParceirosController@get');
    $app->post('parceiros-edit/{id}', 'ParceirosController@edit');
    $app->put('parceiros/{id}', 'ParceirosController@update');
    $app->delete('parceiros/{id}', 'ParceirosController@delete');

    $app->get('gateways', 'GatwaysController@list');
    $app->get('gateways/{id}', 'GatwaysController@create');
    $app->post('gateways/{id}', 'GatwaysController@get');
    $app->post('gateways/{id}', 'GatwaysController@edit');
    $app->put('gateways-edit/{id}', 'GatwaysController@update');
    $app->delete('gateways/{id}', 'GatwaysController@delete');




});


$router->group(['prefix' => 'produtos'], function () use ($router) {
    $router->get('users', function () {
        // Matches The "/admin/users" URL
    });
});