<?php

$tempoExperiencia = $_GET['tempo-experiencia'];

$junior = 2;

$pleno = 4;

$senior = 6;

if (!isset($tempoExperiencia)) {

    echo "Infomre seu tempo de experiência!";

    exit;

}

if ($tempoExperiencia <= $junior) {

    echo "Junior";

}

elseif ($tempoExperiencia <= $pleno) {

    echo "Pleno";

}

else if ($tempoExperiencia > $pleno) {

    echo "Senior";

}

