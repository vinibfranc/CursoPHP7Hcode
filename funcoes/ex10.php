<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 12:32
 */
//Função anônima (não tem nome e return)
function test($callback){
    //Processo lento
    $callback();
}

test(function (){
    echo "Terminou!";
});