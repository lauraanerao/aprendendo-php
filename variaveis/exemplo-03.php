<?php


$nome = "Hcode";

$site = 'www.hcode.com.br';

$ano = 1991;

$salario = 10000.14;

$bloqueado = false;
/////////////////////////////
$frutas = array ("abacaxi", "laranja", "manga");
 
//echo $frutas[2];

$nascimento = new DateTime();

// Make my timezone to America/Rio_Branco
//var_dump($nascimento->setTimezone(new DateTimeZone('America/Rio_Branco'))->format('d/m/Y H:i:s'));

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = NULL;
$vazio = "";


?>



