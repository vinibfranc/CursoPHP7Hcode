<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 11:51
 */

$conn = new PDO("mysql:dbname=db_php7;host=localhost","root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row){
    foreach ($row as $key => $value){
        echo "<strong>".$key.":</strong>".$value."<br>";
    }
    echo "==============================<br>";
}
var_dump($results);