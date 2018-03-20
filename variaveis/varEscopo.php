<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 07/03/2018
 * Time: 14:56

 * Normalmente criamos variáveis locais
 * Variável de seção: global
 */

$nome = "Vinícius";

function teste() {
    global $nome;
    echo $nome;
}

function teste2() {
    $nome = "João";
    echo $nome."agora no teste2";
}

teste();
teste2();

?>