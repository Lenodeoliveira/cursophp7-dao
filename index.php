<?php

require_once("config.php");

//Carrega um único usuário.
//$root = new Usuario();
//$root->loadById(14);
//echo $root;

//Carrega a tabela de usuários em json
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios); 

//Carrega uma lista de usuários.
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega o usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("john","senha");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("Aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(18);

$usuario->update("professor","!@$%l&*");

echo $usuario;
?>