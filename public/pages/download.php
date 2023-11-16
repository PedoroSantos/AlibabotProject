<!DOCTYPE html>
<html lang="en">
<?php
include("../../server/download-control.php");
if (!isset($_COOKIE['login_info'])) {
    header("Location:../pages/login.php");
} ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | Alibabot</title>
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
    <link rel="stylesheet" href="../sources/styles/index.css">
    <link rel="stylesheet" href="../sources/styles/download.css">
    <link rel="shortcut icon" href='../sources/img/alibabot_logo.svg' type="image/x-icon">
</head>

<body>
    <section id="download" class="text-light">
        <header class="p-2 shadow-lg">
            <div class="header-content d-flex justify-content-start align-items-center">
                <h1 class="mx-1 w-100 h-auto my-0 fw-bolder"><img src="../sources/img/alibabot_logo.svg" alt="logo" width="38px" class="mx-2">Alibabot</h1>

                <a href="profile.php" class="hd-link mx-2 text-light text-decoration-none">
                    <i class="fas fa-user"></i> Perfil </a>
                <a href="../" class="hd-link mx-2 text-light text-decoration-none " onClick='document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });'><i class="fa-solid fa-right-from-bracket"></i> Sair </a>
            </div>

        </header>
        <div class="download-content mt-5 container">
            <article class="download-article mt-2 p-3 rounded-5 shadow">
                <h2 class="fw-semibold px-3 ">Download</h2>
                <p class="fs-5 px-3 mt-2 ">
                    Você quer aprender de forma eficiente e divertida? Então baixe o Alibabot, o aplicativo de IA que te ajuda a estudar qualquer matéria e nível de ensino. Com o Alibabot, você pode interagir com um chatbot inteligente, acessar conteúdos de qualidade, personalizar o seu plano de estudos e acompanhar o seu progresso. O Alibabot é gratuito e fácil de usar. Não perca tempo e baixe agora mesmo! <span class="emoji">😊</span>
                <div class="download-links mt-5 p-3  w-100 rounded-5 ">
                    <p class=" mx-1 ">Versão mais recente.</p>
                    <include>
                        <button class="btn-download p-2 px-4" onClick='download(<?php echo sizeof($versoes) - 1?>)'>Clique aqui para baixar</button>
                        <a class="mx-4 link text-light text-decoration-none" href="../pages/versões.php">Versões anteriores</a>
                </div>

        </div>
    </section>
</body>

</html>