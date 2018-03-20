<?php

//Tipos de variáveis básicos
$nome = "HCode"; //String
$site = "www.hcode.com.br";
$ano = 1998; //inteiro
$salario = 5500.99; //float
$bloqueado = false; //boolean

//Tipos de variáveis compostos
$frutas = array("abacaxi","laranja","manga"); //array
echo $frutas[2];
echo "<br>";
$nascimento = new DateTime();
var_dump($nascimento);
echo "<br>";

//Tipos especiais
$arquivo = fopen("varTipos.php","r"); //resource
var_dump($arquivo);

echo "<br>";
$nulo = NULL; //null
var_dump($nulo);