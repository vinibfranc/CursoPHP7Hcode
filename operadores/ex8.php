<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 08/03/2018
 * Time: 09:22
 */

//Precedência de operadores
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;
var_dump($resultado);
echo "<br>";
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 20;
var_dump($resultado);
//echo $resultado;