<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 17/03/2018
 * Time: 13:43
 */
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {
    public function acelerar($vel){
        echo "O veículo acelerou até ".$vel." km/h";
    }
    public function frenar($vel){
        echo "O veículo frenou até ".$vel." km/h";
    }
    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha ".$marcha;
    }
}