<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alibabot | Login</title>
    <!-- Libs -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Fontes-->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--Lib de icons-->
    <script src="https://kit.fontawesome.com/23139fef71.js" crossorigin="anonymous"></script>
    <!--Estilos-->
    <link rel="stylesheet" href="../sources/styles/auth.css">

</head>

<body>
    <section id="login" class="d-flex justify-content-center align-items-center flex-column h-100">

        <div class="login-content d-flex justify-content-center align-items-center flex-column text-white">
            
            <form method="post" action="../../server/verificar-usuario.php" class="login-form d-flex justify-content-center align-items-center flex-column">
                <input type="hidden" name="cargo" , name="Usuarios">
                <i class="fas fa-user"></i>
                <h1> LOGIN </h1>
                <label>Email</label>
                <input type="text" name="email">
                <label>Senha</label>
                <input type="text" name="senha">
                <input type="submit" value="autenticar" name="Autenticar">
            </form>
        </div>
        <div class="links">
            <a href="cadastro-usuario.php"> Ainda não é membro?</a>
            <a href="#">É um funcionário?</a><br>
        </div>
    </section>

    <?php
    var_dump($_COOKIE["login_info"]);
    if (isset($_COOKIE["email"]) || isset($_COOKIE["email"])) {
    ?>

        <!-- formulario pra enviar as info por post
    <form method="post" action="../../server/verificar-usuario.php">
        <input type="hidden" name="cargo", name="Usuarios"> <br>
        Email: <input type="text" name="email"> <br>
        Senha: <input type="text" name="senha"> <br>
        <input type="submit" value="autenticar" name="Autenticar"> <br>
    </form>
    -->
    <?php
    }

    if (isset($_GET["erro"])) {
        echo '<p class="erro"> Combinação Usuario/Senha não encontrada. </p>';
    }
    ?>

    <br>


</body>

</html>