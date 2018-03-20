<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 07/03/2018
 * Time: 14:20
 */

/*
 * Comentário de várias linhas
 */

//exemplos de nomenclatura
$nome1 = "Vinícius";
$sobrenome = "Franceschi";
$anoNascimento = 1998;
$nomeCompleto = $nome1 . " " . $sobrenome; //concatenação feita com pontos
echo $nomeCompleto;
exit;
//destrói variável
unset($nome1);
//saber se existe
if(isset($nome1)) {
    echo $nome1;
}
//$1nome = "Vini";
?>