<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 13:00
 */
//TRANSACTIONS
$conn = new PDO("mysql:host=localhost; dbname=db_php7","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario= ?");
$id = 2;

$stmt->execute(array($id));
//$conn->rollBack();
$conn->commit();
echo "Dados deletados com sucesso!";