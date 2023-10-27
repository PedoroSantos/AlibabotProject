<html>
    <head>
        <meta charset="UTF-8">
        <title> Login Usuario </title>
    </head>
    
    <body>
    <h1> Login Usuario </h1>
    <form method="post" action="../../server/verificar-usuario.php">
        <input type="hidden" name="cargo", name="Usuarios"> <br>
        Email: <input type="text" name="email"> <br>
        Senha: <input type="text" name="senha"> <br>
        <input type="submit" value="autenticar" name="Autenticar"> <br>
    </form>
    
    <?php
        if(isset($_GET["erro"])) {
            echo '<p class="erro"> Combinação Usuario/Senha não encontrada.</p>';
        }
    ?>

    <br>
    <a href="#"> Funcionário </a> <br>
    <a href="cadastro-usuario.php"> Cadastre Aqui! </a>

    </body>
</html>