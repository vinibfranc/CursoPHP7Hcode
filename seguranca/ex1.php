<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 22/03/2018
 * Time: 08:51
 */
//Proteção contra Comand Injection
if($_SERVER["REQUEST_METHOD"] === "POST") {
    //método que não permite execução de comando invasor
    $cmd = escapeshellcmd($_POST["cmd"]);
    var_dump($cmd);
    echo "<pre>";
    $comando = system($cmd,$retorno);

    echo "</pre>";
}
?>
<form method="post">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>