<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 13/03/2018
 * Time: 08:43
 */

$dt = new DateTime();
$periodo = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");
$dt->add($periodo);
echo "<br>";
echo $dt->format("d/m/Y H:i:s");