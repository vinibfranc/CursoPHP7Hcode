<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 22/03/2018
 * Time: 09:04
 */
//Proteção contra o SQL Injection
$id = (isset($_GET["id"]))?$_GET["id"]:3;
if(!is_numeric($id) || strlen($id) > 5){
    exit("Pegamos você");
}
$conn = mysqli_connect("localhost","root","","db_php7");
$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";
$exec = mysqli_query($conn, $sql);
while($resultado = mysqli_fetch_object($exec)){
    var_dump($resultado);
    echo $resultado->deslogin."<br>";
}