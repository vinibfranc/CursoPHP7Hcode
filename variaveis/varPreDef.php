<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 07/03/2018
 * Time: 14:44
 */

/*
 * Toda info que vem de GET ou POST é string
 *Precisa-se fazer cast se necessário
 *URL e URI (pedaços)
 *
 */
//Arrays Superglobais
$nome = $_GET["a"];
$sobrenome = $_GET["b"];
//var_dump($nome);
//var_dump($sobrenome);

$ip = $_SERVER["REMOTE_ADDR"];
//$script = $_SERVER["SCRIPT_FILENAME"];
var_dump($ip);