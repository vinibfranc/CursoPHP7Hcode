<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 16/03/2018
 * Time: 11:21
 */

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {
    public function acelerar($vel){
        echo "O veículo acelerou até ".$vel."km/h";
    }
    public function frenar($vel){
        echo "O veículo frenou até ".$vel."km/h";
    }
    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha ".$marcha;
    }
}

$carro = new Civic();
$carro->trocarMarcha(1);