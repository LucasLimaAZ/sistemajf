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

    public function deletar()
    {
        Produto::deletar($_POST);

        return $this->responderJSON($_POST);
    }

    public function acrescentar()
    {
        $produtos = Produto::buscar();

        return view('acrescentar-produtos', compact('produtos'));
    }

    public function consultarEstoque()
    {
        $produtos = Produto::buscar();

        return view('consultar-estoque', compact('produtos'));
    }

    public function buscar()
    {
        $produtos = Produto::buscar();
        
        return $this->responderJSON($produtos);
    }

    public function editar()
    {
        $produtos = Produto::buscar();

        return view('editar-estoque', compact('produtos'));
    }

}
