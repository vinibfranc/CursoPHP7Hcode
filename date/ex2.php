<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 13/03/2018
 * Time: 08:31
 */

//$ts = strtotime("2018-03-13");
$ts = strtotime("+1 month");
echo date("d/m/Y", $ts);