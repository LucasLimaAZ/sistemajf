<?php

function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}

function dd($data)
{
    die(var_dump($data));
}

function categoria($categoria)
{
    switch ($categoria){
        case "mecanica":
            return "Mecânica";
            break;
        case "acessorios":
            return "Acessórios";
            break;
        case "lubrificantes":
            return "Lubrificantes";
            break;
        case "quimicos":
            return "Químicos";
            break;
        case "parafusos":
            return "Parafusos / Porcas";
            break;
        case "outros":
            return "Outros";
            break;
    }
}

function valor_centavos($valor)
{
    $val = str_replace(".", ",", $valor);
    if(filter_var($valor, FILTER_VALIDATE_INT)){
        $val .= ',00';
    }
    return $val;
}

function utf8($dat)
   {
      if (is_string($dat)) {
         return utf8_encode($dat);
      } elseif (is_array($dat)) {
         $ret = [];
         foreach ($dat as $i => $d) $ret[ $i ] = utf8($d);

         return $ret;
      } elseif (is_object($dat)) {
         foreach ($dat as $i => $d) $dat->$i = utf8($d);

         return $dat;
      } else {
         return $dat;
      }
   }