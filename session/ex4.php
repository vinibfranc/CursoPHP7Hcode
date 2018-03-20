<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 10:12
 */

session_id('iufs1qtpujqbnrfuj07j6dpc16');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);