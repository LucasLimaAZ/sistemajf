<?php

namespace App\Controllers;

use App\models\Produto;

class ProdutosController extends Controller
{

    public function index()
    {
        return view('cadastro-produtos');
    }

    public function cadastrar()
    {
        Produto::cadastrarProduto($_POST);

        return $this->responderJSON($_POST);
    }

    public function atualizar()
    {
        Produto::atualizar($_POST);

        return $this->responderJSON($_POST);
    }

    public function vizualizar()
    {
        $produtos = Produto::buscar();

        return view('vizualizar-produtos', compact('produtos'));
    }

}
