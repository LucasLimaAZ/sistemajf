<?php

$folder = 'sistemajf';

$router->post("login", 'UsersController@login');
$router->get("logout", 'UsersController@logout');

$router->get("recuperar-senha", 'UsersController@recuperarSenha');

$router->post("enviar-email", 'EmailController@enviar');
$router->post("atualizar-senha", 'UsersController@atualizarSenha');

$router->get("perfil", 'UsersController@perfil');

if(isset($_SESSION['hierarquia']) && $_SESSION['hierarquia'] == 'user'){

    $router->get("", 'HomeController@userIndex');
    $router->get("home", 'HomeController@userIndex');
    
}else{

    $router->get("", 'HomeController@index');
    $router->get("home", 'HomeController@index');
    
    $router->get("cadastro-produtos", 'ProdutosController@index');
    $router->get("edicao-produtos", 'ProdutosController@editar');
    $router->post("cadastrar-produto", 'ProdutosController@cadastrar');
    $router->get("acrescentar-produtos", 'ProdutosController@acrescentar');
    $router->post("atualiza-produto", 'ProdutosController@atualizar');
    $router->post("deletar-produto", 'ProdutosController@deletar');
    $router->get("consultar-estoque", 'ProdutosController@consultarEstoque');
    $router->get("buscar-produtos", 'ProdutosController@buscar');
    $router->get("editar-estoque", 'ProdutosController@editar');
    
    $router->get("tela-login", 'UsersController@index');
    $router->get("cadastro-usuarios", 'UsersController@cadastro');
    $router->post("cadastrar-usuario", 'UsersController@cadastrar');
    $router->get("administrar-usuarios", 'UsersController@administrar');
    $router->post("atualiza-usuario", 'UsersController@update');
    $router->post("deletar-usuario", 'UsersController@destroy');

    $router->get("baixas", 'BaixasController@index');
    $router->get("listar-baixas", 'BaixasController@listar');
    $router->post("registrar-baixa", 'BaixasController@darBaixa');

}