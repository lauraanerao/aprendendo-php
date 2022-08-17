<?php

spl_autoload_register(function($nomeClasse){
    $path = "/var/www/html/poo/autoload";

    if(file_exists($path . DIRECTORY_SEPARATOR . "Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
        require_once($path . DIRECTORY_SEPARATOR . "Abstratas". DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    } elseif (file_exists($path . DIRECTORY_SEPARATOR . $nomeClasse . ".php")) {
        require_once ($path . "/" . $nomeClasse . ".php");
    }
});

$carro = new DelRey();
$carro->acelerar(80);
