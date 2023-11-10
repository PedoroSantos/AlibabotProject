<?php
include("conexao.php");
include("banco-dados.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = buscarnome($conexao,$email);
$cargo = "Usuarios";

setcookie("login_info", "", time() - 3600); 
if(verificarAcesso($conexao, $cargo, $email, $senha, $nome)){
    $login_info = array(
        "cargo" => $cargo,
        "email" => $email,
        "nome" => $nome,
        "senha" => $senha
    );
    echo "<Script"
    setcookie("login_info", json_encode($login_info), 0, "/");

    header("Location:../public/pages/profile.php");
} else {
    header("Location:../public/pages/login.php?erro=true");
}
?>
