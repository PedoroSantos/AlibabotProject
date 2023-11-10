<?php

function selectCargo($cargo) {
	if ($cargo == "usuario"){
		$id_cargo = "idUsuarios";
	}
	else if ($cargo == "funcionario") {
		$id_cargo = "idFuncionarios";
	};
	return $id_cargo;
};
function inserir($conexao, $cargo, $nome, $email, $idade){
	$sql="insert into $cargo(nome, email, idade) values('$nome','$email',$idade);";
	return mysqli_query($conexao,$sql);
};

function alterar($conexao, $cargo, $idUsuario, $nome, $email, $idade){
	$id_cargo = selectCargo($cargo);
	$sql = "update $cargo set nome='$nome',email='$email',idade=$idade where $id_cargo=$idUsuario";
	return mysqli_query($conexao,$sql);
};

function excluir($conexao, $cargo, $id){
	$id_cargo = selectCargo($cargo);
	$sql = "delete from $cargo where $id_cargo = $id";
	return mysqli_query($conexao,$sql);
};

function listaBanco($conexao, $cargo){
	$usuarios = array();
	$sql = "select * from $cargo";
	$resultado =  mysqli_query($conexao,$sql);
	
	while($usuario=mysqli_fetch_assoc($resultado)){
		array_push($usuarios,$usuario);
	}
	return $usuarios;
};


function buscarIndividual($conexao, $cargo, $idUsuario){
	$id_cargo = selectCargo($cargo);
	$sql = "select * from $cargo where $id_cargo = $idUsuario";
	$resultado = mysqli_query($conexao,$sql);
	return mysqli_fetch_assoc($resultado);
};

function verificarAcesso($conexao, $email, $senha){

	$sql = "select * from usuarios where email= '$email' and senha= '$senha';";
	$cargo = "usuario";
	$resultado = mysqli_query($conexao, $sql);
	$resultado = mysqli_fetch_assoc($resultado);
	
	if ($resultado == NULL){
		$sql = "select * from funcionarios where email= '$email' and senha= '$senha';";
		$cargo = "funcionario";
		$resultado = mysqli_query($conexao, $sql);
		$resultado = mysqli_fetch_assoc($resultado);
	}
	$resultado["cargo"] = $cargo;
	return $resultado;
}
function verificaremail($conexao, $email){
	$sql = "select count(email) from Usuarios where email='$email';";
	$resultado = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_array($resultado,MYSQLI_NUM);
	return $row[0];
}
function buscarnome($conexao,$email){
	$sql = "select nome from Usuarios where email='$email';";
	$resultado = mysqli_query($conexao, $sql);
}
?>