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
        Baixa::registrar($_POST);

        return $this->responderJSON($_POST);
    }

    public function listar()
    {
        $baixas = Baixa::buscar();

        foreach($baixas as $baixa){
            $produto = Produto::encontrar(["id" => $baixa->produto_id]);
            $baixa->produto_nome = $produto[0]->nome;
            $baixa->produto_referencia = $produto[0]->referencia;
            $baixa->produto_aplicacao = $produto[0]->aplicacao;
        }

        return view('listar-baixas', compact("baixas"));
    }

}
