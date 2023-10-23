<?php
include("conexao.php");

function inserir($conexao, $cargo, $nome, $email, $idade){
	$sql="insert into $cargo(nome, email, idade) values('$nome','$email',$idade);";
	return mysqli_query($conexao,$sql);
};

function alterar($conexao, $cargo, $idCliente, $nome, $email, $idade){
	$id_cargo = selectCargo($cargo);

	$sql = "update $cargo set nome='$nome',email='$email',idade=$idade where $id_cargo=$idCliente";
	return mysqli_query($conexao,$sql);
};

function excluir($conexao, $cargo, $id){
	$id_cargo = selectCargo($cargo);

	$sql = "delete from $cargo where $id_cargo = $id";

	return mysqli_query($conexao,$sql);
};

function listarClientes($conexao, $cargo){
	$clientes = array();
	$sql = "select * from $cargo";
	$resultado =  mysqli_query($conexao,$sql);
	
	while($cliente=mysqli_fetch_assoc($resultado)){
		array_push($clientes,$cliente);
	}
	return $clientes;
};

function selectCargo($cargo) {
	if ($cargo == "cliente"){
		$id_cargo = "idClientes";
	}
	else if ($cargo == "funcionário") {
		$id_cargo = "idFuncionarios";
	};

	return $id_cargo;
};

function buscarIndividual($conexao, $cargo, $idCliente){
	$id_cargo = selectCargo($cargo);

	$sql = "select * from $cargo where $id_cargo = $idCliente";
	
	$resultado = mysqli_query($conexao,$sql);
	return mysqli_fetch_assoc($resultado);
};
?>