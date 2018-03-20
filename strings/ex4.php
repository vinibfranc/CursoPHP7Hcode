<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 08/03/2018
 * Time: 09:38
 */
$frase = "A repetição é mãe da retenção";
$palavra = "mãe";
$q = strpos($frase, $palavra);
var_dump($q);
echo "<br>";
$texto = substr($frase, 0, $q);
var_dump($texto);
echo "<br>";
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);