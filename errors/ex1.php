<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 20/03/2018
 * Time: 11:24
 */
function error_handler($code, $message, $file, $line){
    echo json_encode(array(
        "message"=>$message,
        "line"=>$line,
        "file"=>$file,
        "code"=>$code
    ));
}

set_error_handler("error_handler");
echo 100/0;