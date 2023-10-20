<?php
include("conexao.php");

function cadastro(){
    
    //dados do fomulario
    $nome = $_POST['nome'];
    $email= $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    //verficar senha
    if ($senha != $confirmar_senha) {
        echo "As senhas não coincidem. Por favor, tente novamente.";
        die();
    }
    $conexao = conectar_banco();
    //hash da senha(armazenar senha segura)
    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    //Inserir dados no bando de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha_hashed')";

    if (mysqli_query($conexao, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro no cadastro: " . mysqli_error($conexao);
    }
    
    //fechar conexao com B.D
    mysqli_close($conexao);
};

if(isset($_POST['submit'])) {
    cadastro();
};

?>