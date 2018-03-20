<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 10:48
 */
function ola(){
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom dia",10));