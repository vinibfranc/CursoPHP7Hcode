<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 22/03/2018
 * Time: 10:12
 */
//Security Socket Layer (SSL) e PHP Session Hijacking
session_start();
//depois de verificar login e senha reinicie o id da sessão
session_destroy();
session_start();
session_regenerate_id();
echo session_id();