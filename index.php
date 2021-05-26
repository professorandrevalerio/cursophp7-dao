<?php 	
require_once("config.php");

//aula 64
//$sql = new Sql;
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//aula 65
$root = new Usuario();
$root->loadById(3);

echo $root;

 ?>