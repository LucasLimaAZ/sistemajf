<?php

namespace App\models;

use App\Core\App;
use App\models\Model;

class Baixa extends Model
{
    public static $table = 'baixas';

    public $id;
    public $produto_id;
    public $quantidade;
    public $data;

    public static function registrar($values)
    {
        $baixa = $_POST;

        date_default_timezone_set('America/Sao_Paulo');
        $baixa['data'] = date('d/m/Y');

        Baixa::cadastrar($baixa);
    }

}