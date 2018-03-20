<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 09/03/2018
 * Time: 10:44
 */
$json =
    '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Gl\u00e1ucio","idade":25}]';
$data = json_decode($json, true);
var_dump($data);
?>