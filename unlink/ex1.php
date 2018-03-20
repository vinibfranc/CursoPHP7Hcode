<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 23:22
 */
$file = fopen("teste.txt", "w+");
fclose($file);
unlink("teste.txt");
echo "Arquivo removido com sucesso";