<?php
include("conexao.php");

//dados do fomulario
$nome = $_POST['nome'];
$email= $_POST['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];
$cargo = $_POST["cargo"];


//verficar senha
if ($senha != $confirmar_senha) {
    echo '<p class="confirmar_senha erro"> As senhas não coincidem. Por favor, tente novamente.</p>';
    header("Location:../public/pages/cadastro-$cargo.php?erro=senhas");
    die();
}

if ($cargo == "Funcionarios") {
    $area = $_POST['area'];
    $sql = "INSERT INTO $cargo (nome, email, senha, areaFuncionario) VALUES ('$nome', '$email', '$senha', '$area')";
}
else if ($cargo = "Usuarios") {    
    $sql = "INSERT INTO $cargo (nome, email, senha, termosCondicoes) VALUES ('$nome', '$email', '$senha', true)";
}


if (mysqli_query($conexao, $sql)) {
    header("Location:../public/pages/login.php");
} else {
    header("Location:../public/pages/cadastro.php");
}

//fechar conexao com B.D
mysqli_close($conexao);

?>