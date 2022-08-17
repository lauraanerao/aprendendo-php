<?php

spl_autoload_register(function ($nomeClasse) {

    var_dump($nomeClasse);
    require_once("$nomeClasse.php");

});

$carro = new DelRey();
$carro->acelerar(80);

