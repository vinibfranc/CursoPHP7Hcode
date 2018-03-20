<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 13:58
 */
spl_autoload_register(function ($class_name){
    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";
   if(file_exists($filename)){
       require_once($filename);
   }
});