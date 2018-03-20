<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 18/03/2018
 * Time: 13:59
 */
require_once("config.php");

//Carrega um usuário
$root = new Usuario();
$root->loadById(3);
echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("ja");
echo json_encode($search);*/

//Carrega um usuário usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("root","%#$&*@");
echo $usuario;*/

//Criando um novo usuário
$aluno = new Usuario("aluno","@alun0");
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno;

//Alterar um usuário
/*$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("professor","4321");
echo $usuario;*/

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;
?>