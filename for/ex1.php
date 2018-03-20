<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 08/03/2018
 * Time: 10:24
 */
for($i=0; $i<1000; $i+=5){
    if($i >= 200 && $i <= 800)
        continue;
    if($i === 900)
        break;
    echo $i . "<br>";
}