<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 21/03/2018
 * Time: 14:22
 */

require_once("vendor/autoload.php");
$app = new \Slim\Slim();
$app->get("/", function (){
   echo json_encode(array(
       "date"=>date("d/m/Y")
   ));
});
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();