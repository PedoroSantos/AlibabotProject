<?php
include("conexao.php");
include("banco-dados.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$cargo = "Usuarios";


if(verificarAcesso($conexao, $cargo, $email, $senha)){
    header("Location:../public/index.php");
} else {
    header("Location:../public/pages/login.php?erro=true");
}

?>