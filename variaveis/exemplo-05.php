<?php

$nome = "Laura";

function teste() {

    global $nome;
    echo $nome . " ";

}

function teste2() {

    $nome = "Junior";
    echo $nome . " " . "agora no teste2";

}

teste();
teste2();

function setMessage() {

    global $message;
    $message = "Hello World";

}

setMessage();
echo $message;

?>