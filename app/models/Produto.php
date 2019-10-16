<?php

namespace App\models;

use App\Core\App;
use App\models\Model;

class Produto extends Model
{
    public static $table = 'produtos';

    public $id;
    public $nome;
    public $referencia;
    public $aplicacao;
    public $valor_custo;
    public $valor_venda;
    public $data_entrada;
    public $categoria;
    public $quantidade;

    public static function cadastrarProduto($values)
    {
        $produto = $_POST;

        date_default_timezone_set('America/Sao_Paulo');
        $produto['data_entrada'] = date('d-m-y');

        Produto::cadastrar($produto);
    }

}