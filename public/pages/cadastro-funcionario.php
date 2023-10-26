<?php
    include("../../server/cadastro-proc.php");
?>

<html>
<head>
    <title>Cadasto</title>
</head>

<body>
    <h1>Cadastro de Usuários</h1>
    
    <!-- ACTION NOT WORKING -->
    <form action="cadastro_funcionario($conexao)" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="confirmar_senha">Confirme a Senha:</label>
        <input type="password" id="confirmar_senha" name="confirmar_senha" required><br><br>

        <label for="area">Qual sua área de atuação?</label>
        <input id="area" name="area" required><br><br>

        <input type="submit" value="Cadastrar" name="submit">
    </form>

</body>
</html>
