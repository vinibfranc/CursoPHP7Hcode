<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 09/03/2018
 * Time: 10:36
 */
$pessoas = array();
array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));
array_push($pessoas, array(
    'nome' => 'Gláucio',
    'idade' => 25
));

echo json_encode($pessoas);

?>