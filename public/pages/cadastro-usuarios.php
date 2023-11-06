<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alibabot | Cadastro</title>
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

<section id="cadastro" class="d-flex justify-content-center align-items-center flex-column h-100">
    <div class="cadastro-content d-flex justify-content-center align-items-center flex-column text-white">
        <form method="post" action="../../server/cadastro-proc.php" class="cadastro-form d-flex justify-content-center align-items-center flex-column">
            <input type="hidden" name="cargo" value="Usuarios">
            <h1> CADASTRO </h1>
            <div class="nome-content">
                <i class="icon fas fa-user"></i>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome" required>
            </div>
            <div class="email-content">
                <i class="icon fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Insira seu e-mail" required>
            </div>
            <div class="password-content">
                <i class="icon fas fa-lock"></i>
                <input type="password" id="senha" name="senha" placeholder="Insira sua senha" required>
            </div>
            <div class="confirm-password-content">
                <i class="icon fas fa-lock"></i>
                <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha" required>
            </div>
            <input type="submit" value="Cadastrar" name="submit">
        </form>
    </div>
    <div class="links mt-2 text-light d-flex flex-column align-content-center justify-content-center text-center">
        <a href="login.php"> Já é membro?</a>
        <a href="#">É um funcionário?</a><br>
    </div>
</section>


<?php
if (isset($_GET["erro"]) && $_GET["erro"] == "senhas") {
    echo '<p class="erro"> As senhas nao coincidem. <p>';
}
?>

</body>

</html>