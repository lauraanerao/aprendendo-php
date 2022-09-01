<?php

spl_autoload_register(function($nomeClasse){
    $path = "/var/www/html/dao/";

    if(file_exists($path . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
        require_once($path . DIRECTORY_SEPARATOR . "Abstratas". DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }

    var_dump($nomeClasse);
});