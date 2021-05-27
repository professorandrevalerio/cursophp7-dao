<?php 	
require_once("config.php");

//aula 64
//$sql = new Sql;
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//aula 65 - CARREGA UM USUARIO
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//AULA 66 - CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();//Como a funcao getList() e static, nao precisa instanciar so colocar nomeClasse::nomeDoMetodo
//echo json_encode($lista);

//AULA 66.b - CARREGA UMA LISTA DE USUARIOS com parametro
//$search = Usuario::search("jo");
//echo json_encode($search);

//AULA 66.c - CARREGA UMA LISTA DE USUARIOS com parametro - testando se usuario e senha validos
$usuario = new Usuario();
$usuario->login("joao", "qwerty");

echo $usuario;





 ?>