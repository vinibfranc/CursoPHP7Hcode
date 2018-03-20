<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 08/03/2018
 * Time: 09:32
 */
$nome = "Vini Franceschi";
echo strtoupper($nome); //maiúsculas
echo "<br>";
echo strtolower($nome); //minúsculas
echo "<br>";
$nome = strtolower($nome);
echo ucfirst($nome); //só primeira
echo "<br>";
echo ucwords($nome); //primeira de cada palavra