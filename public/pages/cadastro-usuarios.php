<html>
<head>
    <title>Cadasto</title>
</head>

<body>
    <h1>Cadastro de Usuarios</h1>
    

    <form action="../../server/cadastro-proc.php" method="post">
        <input type="hidden" name="cargo", value="Usuarios">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="confirmar_senha">Confirme a Senha:</label>
        <input type="password" id="confirmar_senha" name="confirmar_senha" required><br><br>

        <input type="submit" value="Cadastrar" name="submit">
    </form>

        <?php
            if(isset($_GET["erro"]) && $_GET["erro"] == "senhas") {
                echo '<p class="erro"> As senhas nao coincidem. <p>';
            }
        ?>

</body>
</html>
