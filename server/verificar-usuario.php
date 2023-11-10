<?php
include("conexao.php");
include("banco-dados.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

setcookie("login_info", "", time() - 3600); 
if(verificarAcesso($conexao, $email, $senha)){
    // DON'T KNOW IF THIS WORKS, GOTTA TEST IT LATER
    $cargo, $nome, $email, $senha = verificarAcesso($conexao, $email, $senha)
    $login_info = array(
        "cargo" => $cargo,
        "nome" => $nome,
        "email" => $email,
        "senha" => $senha
    );
    setcookie("login_info", json_encode($login_info), 0, "/");

    header("Location:../public/pages/profile.php");
} else {
    header("Location:../public/pages/login.php?erro=true");
}
?>
