<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

    public function acelerar($velocidade){

        echo "O veículo acelerou até " . $velocidade . "km/h.";
    }

    public function frear($velocidade){

        echo "O veículo freiou até " . $velocidade . "km/h.";
    }

    public function trocarMarcha($marcha) {

        echo "O veículo engatou a marcha " . $marcha;
    }
}

$carro = new Civic();
$carro->trocarMarcha(1);
