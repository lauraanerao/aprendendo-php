<?php
//$nome = (int)$_GET["nome"];
//
//$sobrenome = $_GET["sobrenome"];
//
//var_dump($nome, $sobrenome);
//
//$ip = $_SERVER["SCRIPT_NAME"];
//
//echo $ip;

$ip = $_SERVER["REMOTE_ADDR"];

$urlUsuario = $_SERVER["SCRIPT_NAME"];

$agora = new DateTime();

$usuario = $_GET["usuario"];

echo  $agora->format("d/m/Y h:i:s") . $ip . $urlUsuario . $usuario;


?>