<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 12:39
 */
//UPDATE
$conn = new PDO("mysql:host=localhost; dbname=db_php7","root","");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$login = "joao";
$password="qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();
echo "Dados alterados com sucesso!";