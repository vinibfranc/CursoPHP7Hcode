<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 10:53
 */
$a = 10;

// & : passagem de parâmetro por referência
function trocaValor(&$a){
    $a += 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;