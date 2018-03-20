<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 08/03/2018
 * Time: 10:45
 */

$meses = array(
    "Janeiro","Fevereiro","Março",
    "Abril","Maio","Junho",
    "Julho","Agosto","Setembro",
    "Outubro","Novembro","Dezembro"
);

foreach($meses as $index => $mes){
    echo "Indice: ",$index."<br>";
    echo "O mes é:".$mes."<br><br>";
}