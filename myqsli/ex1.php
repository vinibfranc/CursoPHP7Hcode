<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 01:12
 */
$conn = new mysqli("localhost","root","","db_php7");
if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (?,?)");
$stmt->bind_param("ss",$login,$pass);
$login = "user";
$pass = "12345";
$stmt->execute();
$login = "root";
$pass = "%#$&*@";
$stmt->execute();
