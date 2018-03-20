<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 17/03/2018
 * Time: 13:41
 */

function __autoload($nomeClasse){
    var_dump($nomeClasse);
    require_once "$nomeClasse.php";
}
$carro = new DelRey();
$carro->acelerar(80);