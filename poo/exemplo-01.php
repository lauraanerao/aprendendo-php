<?php

class Pessoa {

    public $nome; //atributo

    public function falar(){ //métordo

        return "O meu nome é " . $this->nome;

    }

}

$laura = new Pessoa();
$laura->nome = "Laura Anerão";
echo $laura->falar();

echo "<br>";

$antonio = new Pessoa();
$antonio->nome = "Antonio Anerão";
echo $antonio->falar();
