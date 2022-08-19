<?php

require_once("../../vendor/autoload.php");

use Cliente\Cadastro;

$cadastro = new Cadastro();

$cadastro->setNome("Djalma Sindeaux");
$cadastro->setEmail("djalma@php.com");
$cadastro->setSenha("123456");
echo $cadastro->getNome();


$cadastro->venda();