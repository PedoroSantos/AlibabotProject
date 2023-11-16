<?php

include("conexao.php");
include("banco-dados.php");

if (isset($_GET["idUsuario"])) {
    $id = $_GET["idUsuario"];
    $cargo = "Usuarios";
    $idCargo = "idUsuario";

} else if (isset($_GET["idFuncionario"])) {
    $id = $_GET["idFuncionario"];
    $cargo = "Funcionarios";
    $idCargo = "idFuncionario";
}

$cliente = buscarIndividual($conexao, $cargo, $id);


function excluir($conexao, $cargo, $id) {
    excluirUser($conexao, $cargo, $id);
    header("Location:lista-$cargo.php");
}

?>