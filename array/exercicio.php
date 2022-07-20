<?php

// Faça um array que contenha os dias da semana
$diasSemana = ["segunda", "terça", "quarta", "quinta", "sexta"];

// Exiba todos os dias da semana que estão no array

print_r($diasSemana);
echo "<hr>";

// Exiba apenas o dia segunda-feira

print_r($diasSemana[0]);

echo "<hr>";
// Exiba todos os dias do array, exceto pela segunda-feira

foreach ($diasSemana as $value){

    if ($value !== "segunda"){

   echo $value . "<br>";
    }

}
echo "<hr>";
// Exiba todos os dias da semana do array junto com suas keys

foreach($diasSemana as $index => $dia){

    echo $index . "-" . $dia . "<br>";
}



// PS TE AMO