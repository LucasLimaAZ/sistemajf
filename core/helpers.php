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