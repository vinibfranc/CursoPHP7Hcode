<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 10:40
 */
function ola($texto, $periodo = "Bom dia"){
    return "Olá $texto! $periodo!<br>";
}

echo ola("galáxia");
echo ola("mundo","Boa noite");
echo ola("Vini", "Boa tarde");
echo ola("Jaque","");