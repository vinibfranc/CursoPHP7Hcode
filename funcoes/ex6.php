<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 11:00
 */
$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoa as $value) {
    if(gettype($value) === "integer") {
        $value += 10;
    }
    echo $value."<br>";
}
print_r($pessoa);