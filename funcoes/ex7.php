<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 11:06
 */

//declaração de tipos escalares
function soma(int ...$valores){
    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.2,3.9);