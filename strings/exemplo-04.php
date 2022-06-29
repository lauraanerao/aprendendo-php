<?php

$frase = '"A repetição é mãe da retenção."';

$palavra = "mãe";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

echo $texto;

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

echo $texto2;



