<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 17/03/2018
 * Time: 14:01
 */
spl_autoload_register(function ($nameClass){
    $dirClass = "class";
    $filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";
    if(file_exists($filename)){
        require_once($filename);
    }
});