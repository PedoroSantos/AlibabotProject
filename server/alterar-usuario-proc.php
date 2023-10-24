<?php
include("conexao.php");
include("banco-dados.php");

if(isset($_GET['idUsuario'])) {
	$cargo= 'idUsuario';
	$usuario=$_GET['idUsuario'];
} else if (isset($_GET['idFuncionario'])) {
	$cargo='idFuncionario';
	$usuario=$_GET['idFuncionario'];
};

$usuario=buscarIndividual($conexao, $usuario, $id);

?>