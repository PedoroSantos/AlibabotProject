<?php
include("conexao.php");
include("banco-dados.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

setcookie("login_info", "", time() - 3600); 
if(verificarAcesso($conexao, $email, $senha)){
    // DON'T KNOW IF THIS WORKS, GOTTA TEST IT LATER
    $resultado = verificarAcesso($conexao, $email, $senha);
    $login_info = array(
        "cargo" => $resultado["cargo"],
        "nome" => $resultado["nome"],
        "email" => $resultado["email"],
        "senha" => $resultado["senha"]
    );

    var_dump($login_info);
    
    setcookie("login_info", json_encode($login_info), 0, "/");

    header("Location:../public/pages/profile.php");
} else {
    header("Location:../public/pages/login.php?erro=true");
}
?>
