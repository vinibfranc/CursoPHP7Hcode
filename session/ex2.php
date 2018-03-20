<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 09/03/2018
 * Time: 11:03
 */
require_once("config.php");
session_unset($_SESSION['nome']); //limpar variáveis de sessão, mas continua sendo usuário
echo $_SESSION['nome'];
session_destroy(); //limpa variável e remove usuário
?>