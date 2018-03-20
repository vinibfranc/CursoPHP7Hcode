<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 23:06
 */
$file = fopen("log.txt","a+");
fwrite($file, date("Y-m-d H:i:s")."\r\n");
fclose($file);
echo "Arquivo criado com sucesso";