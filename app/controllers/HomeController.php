<?php

namespace App\Controllers;

use App\models\Cliente;
use App\models\Arquivos;

class HomeController
{

    public function index()
    {
        return view('index');
    }

    public function userIndex()
    {
        die('Não há uma "view" para essa rota! <br><a href="logout">Sair</a>');
    }

}
