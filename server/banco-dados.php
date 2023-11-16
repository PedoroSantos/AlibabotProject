<?php

function selectCargo($cargo) {
	if ($cargo == "Usuarios"){
		$idCargo = "idUsuario";
	}
	else if ($cargo == "Funcionarios") {
		$idCargo = "idFuncionario";
	};
	return $idCargo;
};
function inserir($conexao, $cargo, $nome, $email, $idade){
	$sql="insert into $cargo(nome, email, idade) values('$nome','$email',$idade);";
	return mysqli_query($conexao,$sql);
};

function alterar($conexao, $cargo, $idUsuario, $nome, $email, $idade){
	$idCargo = selectCargo($cargo);
	$sql = "update $cargo set nome='$nome',email='$email',idade=$idade where $idCargo=$idUsuario";
	return mysqli_query($conexao,$sql);
};

function excluirUser($conexao, $cargo, $id){
	$idCargo = selectCargo($cargo);
	$sql = "delete from $cargo where $idCargo = $id";
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
	$idCargo = selectCargo($cargo);
	$sql = "select * from $cargo where $idCargo = $idUsuario";
	$resultado = mysqli_query($conexao,$sql);
	return mysqli_fetch_assoc($resultado);
};

function verificarAcesso($conexao, $email, $senha){

	$cargos = ["Funcionarios", "Usuarios"];

	foreach($cargos as $cargo) {
		$sql = "select * from $cargo where email= '$email' and senha= '$senha';";
		$resultado = mysqli_query($conexao, $sql);
		$resultado = mysqli_fetch_assoc($resultado);
		if ($resultado != NULL) { break; };
		}
	
	if ($resultado == NULL){
		return $resultado;
	} else{
		$resultado["cargo"] = $cargo;
		return $resultado;
	}
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
	$row = mysqli_fetch_array($resultado,MYSQLI_NUM);
	return $row[0];
}
?>