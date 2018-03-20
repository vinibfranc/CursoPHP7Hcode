<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 10:20
 */
require_once("config.php");
echo session_save_path();
echo "<br>";
var_dump(session_status());
echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "Seções desabilitadas";
        break;
    case PHP_SESSION_NONE:
        echo "Seções habilitadas, mas nenhuma existe";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Seções habilitadas e uma existe";
        break;
}