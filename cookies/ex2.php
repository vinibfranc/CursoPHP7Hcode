<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 19/03/2018
 * Time: 12:10
 */
if(isset($_COOKIE["NOME_DO_COOKIE"])){
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
    echo $obj->empresa;
}