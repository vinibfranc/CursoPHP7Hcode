<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 08/03/2018
 * Time: 11:06
 */

$total = 150;
$desconto = 0.9;

do {
    $total *= $desconto;
}while($total > 100);
echo $total;