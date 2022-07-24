<?php

function ola($texto = "mundo", $saudacao = "Bom dia!"){

    return "Olá, $texto! $saudacao<br>";


}

echo ola();
echo ola("", "Boa Noite!");
echo ola("Laura", "Boa Tarde!");
echo ola("Antonio", "");
