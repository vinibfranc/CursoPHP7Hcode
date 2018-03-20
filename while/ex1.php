<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 08/03/2018
 * Time: 10:59
 */

//Utilidade principal: recupeção de dados do banco
$condicao = true;
while($condicao) {
    $numero = rand(1,10);
    if($numero === 3){
        echo "TRES!!!";
        $condicao = false;
    }
    echo $numero . " ";
}