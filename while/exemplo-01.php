<?php

$condicao = true;
$contador = 0;


while ($condicao){

    $numero = rand(1, 10);

    if ($numero === 3) {

        echo "Três!!!";
        $condicao = false;
    }

    $contador++;
}

echo "<br>" . $contador;