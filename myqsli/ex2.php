<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 01:12
 */
$conn = new mysqli("localhost","root","","db_php7");
if($conn->connect_error){
    echo "Error: ".$conn->mysqli_connect_error;
}
$result = $conn->query("SELECY * FROM tb_usuarios");
while($row = $result->fetch_array()){
    array_push($data,$row);
    var_dump($row);
}
echo json_encode($data);