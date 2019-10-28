<?php

namespace App\Controllers;

use App\models\Baixa;
use App\models\Produto;

class BaixasController extends Controller
{

    public function index()
    {
        $produtos = Produto::buscar();

        return view('baixas', compact('produtos'));
    }

    public function darBaixa()
    {
        $baixa = $_POST;
        $produto = Produto::encontrar(["id" => $_POST['produto_id']]);
        $baixa['produto_nome'] = $produto[0]->nome;
        $baixa['produto_referencia'] = $produto[0]->referencia;
        $baixa['produto_aplicacao'] = $produto[0]->aplicacao;
        Baixa::registrar($baixa);

        return $this->responderJSON($_POST);
    }

    public function listar()
    {
        $baixas = Baixa::buscar();

        return view('listar-baixas', compact("baixas"));
    }

}
