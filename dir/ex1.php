<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 22:19
 */
$name = "images";
if(!is_dir($name)){
    mkdir($name);
    echo "Diretório $name criado com sucesso!";
} else{
    rmdir($name);
    echo "Já existe o diretório: $name Foi removido!";
}
