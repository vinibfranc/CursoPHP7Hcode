<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 22/03/2018
 * Time: 09:17
 */
//Permissões de pasta
$pasta = "arquivos";
$permissao = "0775";
if(is_dir($pasta)){
    mkdir($pasta, $permissao);
}
echo "Diretório criado com sucesso";