<?php

include("conexao.php");
include("banco-cliente.php");

$idCliente = $_GET["idCliente"];
$cliente = buscarCliente($conexao, $idCliente);
?>