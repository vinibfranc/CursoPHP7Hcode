<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 17/03/2018
 * Time: 14:10
 */

use cliente\Cadastro;

require_once("config.php");
$cad = new Cadastro();
$cad->setNome("Vini");
$cad->setEmail("vinibfranc@gmail.com");
$cad->setSenha("123456");
echo $cad;
$cad->registrarVenda();
