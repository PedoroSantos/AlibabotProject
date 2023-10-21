<?php
include("conexao.php")

function inserir($conexao,$nome,$email,$idade){
	$sql="insert into cliente(nome, email, idade) values('$nome','$email',$idade);";
	return mysqli_query($conexao,$sql);
}

function alterar($conexao,$idCliente,$nome,$email,$idade){
	$sql = "update cliente set nome='$nome',email='$email',idade=$idade where idClientes=$idCliente";
	return mysqli_query($conexao,$sql);
}

function excluir($conexao,$idCliente){
	$sql = "delete from cliente where idClientes = $idCliente";
	return mysqli_query($conexao,$sql);
}

function listarClientes($conexao){
	$clientes = array();
	$sql = "select * from cliente";
	$resultado =  mysqli_query($conexao,$sql);
	
	while($cliente=mysqli_fetch_assoc($resultado)){
		array_push($clientes,$cliente);
	}
	return $clientes;
}


function buscarCliente($conexao,$idCliente){
	$sql = "select * from cliente where idClientes = $idCliente";
	$resultado = mysqli_query($conexao,$sql);
	return mysqli_fetch_assoc($resultado);
}
?>