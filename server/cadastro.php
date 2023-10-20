<!DOCTYPE html>
<html>
<head>
    <title>Cadasto</title>
</head>

<body>
        <h1>Cadasto de Usuário</h1>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="confirmar_senha">Confirme a Senha:</label>
        <input type="password" id="confirmar_senha" name="confirmar_senha" required><br><br>

        <input type="submit" value="Cadastrar">

</body>
</html>

<?php
include("conexao.php");

$conexao = conectar_banco();

//dados do fomulario
$nome = $_POST['nome'];
$email= $_POST['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

//verficar senha
if ($senha != $confirmar_senha) {
    die("As senhas não coincidem. Por favor, tente novamente.");
}

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
mysqli_close($conexao)
?>