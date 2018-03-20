<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 20/03/2018
 * Time: 11:13
 */
function trataNome($name){
    if(!$name){
        throw new Exception("Nenhum nome foi informado",1);
    }
    echo ucfirst($name)."<br>";
}

try {
    trataNome("João");
    trataNome("");
}catch (Exception $e){
    echo $e->getMessage()."<br>";
}finally{
    echo "Executou o bloco try";
}