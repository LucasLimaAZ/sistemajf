<?php

$producao = false;

if(!$producao){

    return [
        'database' => [
            'name' => 'sistemajf',
            'username' => 'root',
            'password' => '',
            'connection' => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];

}else{

    return [
        'database' => [
            'name' => 'jfpecasautomot',
            'username' => 'jfpecasautomot',
            'password' => 'jfpecas21',
            'connection' => 'mysql:host=mysql13-farm76.kinghost.net',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];

}