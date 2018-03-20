<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 19/03/2018
 * Time: 11:52
 */
$cep = "91220470";
$link = "https://viacep.com.br/ws/91220470/json/";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);
print_r($data);
