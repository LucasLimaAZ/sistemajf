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

}
