<?php


use App\Usuario\Usuario;

require_once("config.php");


//Carrega um usuario
//$root = new usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//echo json_encode(Usuario::search("jo"));

//Carrega um usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("joao", "123456");
//echo $usuario;
//echo "<hr>";
//
//$usuario->login("joao", "123458");
//
//echo $usuario;

$aluno = new Usuario("aluno", "123456");

$aluno->insert();

echo $aluno;

