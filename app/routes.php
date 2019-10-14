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
    $router->post("$folder/cadastrar-cliente", 'ProdutosController@cadastrar');
    $router->get("$folder/produtos", 'ProdutosController@produtos');
    $router->post("$folder/atualiza-cliente", 'ProdutosController@update');
    $router->post("$folder/deletar-cliente", 'ProdutosController@destroy');
    
    $router->get("$folder/tela-login", 'UsersController@index');
    $router->get("$folder/cadastro-usuarios", 'UsersController@cadastro');
    $router->post("$folder/cadastrar-usuario", 'UsersController@cadastrar');
    $router->get("$folder/administrar-usuarios", 'UsersController@administrar');
    $router->post("$folder/atualiza-usuario", 'UsersController@update');
    $router->post("$folder/deletar-usuario", 'UsersController@destroy');

}