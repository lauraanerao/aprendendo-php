<?php

$pessoa = array(
    'nome' => 'Laura',
    'idade' => 29
);

foreach ($pessoa as &$value) {

    if (gettype($value) === "integer") $value += 10;
    echo $value. '<br>';

}

print_r($pessoa);
