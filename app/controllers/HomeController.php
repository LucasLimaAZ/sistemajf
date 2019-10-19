<?php

namespace App\Controllers;

use App\models\Baixa;
use App\models\Produto;

class HomeController
{

    public function index()
    {
        $numeros['produtos'] = Produto::quantidade();
        
        return view('index', compact('numeros'));
    }

    public function userIndex()
    {
        die('Não há uma "view" para essa rota! <br><a href="logout">Sair</a>');
    }

}
