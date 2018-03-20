<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 19/03/2018
 * Time: 12:03
 */
$data = array(
    "empresa"=>"Hcode Treinamentos"
);
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);
echo "OK";
