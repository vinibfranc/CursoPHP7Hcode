<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 12:31
 */

//INSERT
$conn = new PDO("mysql:host=localhost; dbname=db_php7","root","");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");
$login = "vini";
$password="12345";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();
echo "Inserido com sucesso!";
