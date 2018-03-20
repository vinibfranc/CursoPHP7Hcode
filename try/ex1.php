<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 20/03/2018
 * Time: 11:07
 */
try {
    throw new Exception("Houve um erro",400);
}catch (Exception $e){
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}