<?php
include("conexao.php");
include("banco-dados.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$cargo = "Usuarios";


if(verificarAcesso($conexao, $cargo, $email, $senha)){
    $login_info = array(
        "cargo" => $cargo,
        "email" => $email,
        "senha" => $senha
    );
    setcookie("login_info", json_encode($login_info));
    header("Location:../public/index.php");
} else {
    header("Location:../public/pages/login.php?erro=true");
}
?>
