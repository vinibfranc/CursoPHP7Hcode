<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 11:12
 */
//declaração de tipos escalares
function soma(int ...$valores):string{
    return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.2,3.9);