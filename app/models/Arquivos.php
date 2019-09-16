<?php

namespace App\models;

use App\Core\App;
use App\models\Model;

class Arquivos extends Model
{

    public static function lista($diretorio)
    {
        try{
            $pasta = opendir($diretorio);
        }catch(Exception $e){
            dd("Diretório não encontrado!");
        }

        $arquivos = [];

        while(($arquivo = readdir($pasta)) !== FALSE){
            if($arquivo != '.' && $arquivo != '..'){
                array_push($arquivos, $arquivo);
            }
        }

        return $arquivos;
    }

}