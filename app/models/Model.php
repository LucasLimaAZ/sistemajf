<?php

namespace App\models;

use App\core\App;

class Model
{
    
    public static function quantidade()
    {
        $result = App::get('database')->selectAll(static::$table);

        $numero = 0;

        foreach($result as $cliente){$numero++;}

        return $numero;
    }

    public static function cadastrar($values)
    {
        App::get('database')->insert(static::$table, $values);
    }

    public static function buscar()
    {
        $result = App::get('database')->selectAll(static::$table);
        return $result;
    }

    public static function atualizar($dados)
    {
        App::get('database')->update(static::$table, $dados, $where = ["id", $dados['id']]);
    }

    public static function deletar($dados)
    {
        App::get('database')->delete(static::$table, $where = ["id", $dados['id']]);
    }

    public static function encontrar($dados)
    {
        $result = App::get('database')->selectWhere(static::$table, $dados);

        return $result;
    }

}