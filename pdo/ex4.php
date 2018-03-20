<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 12:56
 */
//DELETE
$conn = new PDO("mysql:host=localhost; dbname=db_php7","root","");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario= :ID");
$id = 1;

$stmt->bindParam(":ID",$id);

$stmt->execute();
echo "Dados deletados com sucesso!";