<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 17/03/2018
 * Time: 13:48
 */

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php") == true){
        require_once($nomeClasse.".php");
    }
}
spl_autoload_register("incluirClasses");
spl_autoload_register(function ($nomeClasse){
    if(file_exists("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php") == true){
        require_once("abstratas".DIRECTORY_SEPARATOR .$nomeClasse.".php");
    }
});
$carro = new DelRey();
$carro->acelerar(80);