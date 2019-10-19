<?php

$folder = 'sistemajf';

$router->post("$folder/login", 'UsersController@login');
$router->get("$folder/logout", 'UsersController@logout');

$router->get("$folder/recuperar-senha", 'UsersController@recuperarSenha');

$router->post("$folder/enviar-email", 'EmailController@enviar');
$router->post("$folder/atualizar-senha", 'UsersController@atualizarSenha');

$router->get("$folder/perfil", 'UsersController@perfil');

if(isset($_SESSION['hierarquia']) && $_SESSION['hierarquia'] == 'user'){

    $router->get("$folder", 'HomeController@userIndex');
    $router->get("$folder/home", 'HomeController@userIndex');
    
}else{

    $router->get("$folder", 'HomeController@index');
    $router->get("$folder/home", 'HomeController@index');
    
    $router->get("$folder/cadastro-produtos", 'ProdutosController@index');
    $router->get("$folder/administracao-produtos", 'ProdutosController@administrar');
    $router->post("$folder/cadastrar-produto", 'ProdutosController@cadastrar');
    $router->get("$folder/vizualizar-produtos", 'ProdutosController@vizualizar');
    $router->post("$folder/atualiza-produto", 'ProdutosController@atualizar');
    $router->post("$folder/deletar-produto", 'ProdutosController@destroy');
    
    $router->get("$folder/tela-login", 'UsersController@index');
    $router->get("$folder/cadastro-usuarios", 'UsersController@cadastro');
    $router->post("$folder/cadastrar-usuario", 'UsersController@cadastrar');
    $router->get("$folder/administrar-usuarios", 'UsersController@administrar');
    $router->post("$folder/atualiza-usuario", 'UsersController@update');
    $router->post("$folder/deletar-usuario", 'UsersController@destroy');

    $router->get("$folder/baixas", 'BaixasController@index');
    $router->post("$folder/registrar-baixa", 'BaixasController@darBaixa');

}