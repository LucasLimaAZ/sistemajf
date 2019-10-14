<?php

namespace App\Controllers;

use App\models\Produtos;

class ProdutosController extends Controller
{

    public function index()
    {
        return view('cadastro-produtos');
    }

}
