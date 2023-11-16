<!DOCTYPE html>
<html lang="en">
<?php if (!isset($_COOKIE['login_info'])) {
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
    <link rel="stylesheet" href="../sources/styles/profile.css">
    <link rel="shortcut icon" href='../sources/img/alibabot_logo.svg' type="image/x-icon">
</head>

<body>
    <section id="profile" class="text-light">
        <header class="p-2 shadow-lg">
            <div class="header-content d-flex justify-content-start align-items-center">
                <h1 class="mx-1 w-100 h-auto my-0 fw-bolder">Olá, <?php
                                                                    $obj = json_decode($_COOKIE['login_info']);
                                                                    echo $obj->nome;
                                                                    ?>! <span class="emoji">👋</span></h1>

                <a href="../" class="hd-link mx-2 text-light text-decoration-none " onClick='document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });'><i class="fa-solid fa-right-from-bracket"></i> Sair </a>
            </div>

        </header>
        <div class="profile-content mt-5 container">
            <div class="profile-msg d-flex align-items-center justify-content-start rounded-5 shadow">
                <p class="p-0 m-0"><span class="emoji">✨📝 </span>
                    <?php $arr = array("a" => "Estudar é investir no seu futuro. Não desista dos seus sonhos!", "b" => "O sucesso não vem por acaso. É preciso dedicação, esforço e persistência.", "c" => "Nada é impossível para quem tem vontade de aprender. Busque o conhecimento e supere os desafios.", "d" => "A cada dia, uma nova oportunidade de aprender algo novo. Aproveite cada momento e não pare de se desenvolver.", "d" => "Estudar não é só decorar, é compreender, analisar e aplicar. Use a sua inteligência e criatividade para resolver os problemas.");
                    $key = array_rand($arr);
                    echo $arr[$key];
                    ?>
                </p>
            </div>
            <article class="news mt-2 p-3 rounded-5 shadow">
                <h2 class="fw-semibold px-3 ">O que há de novo?</h2>
                <p class="fs-5 px-3 mt-2 ">Alibabot, o aplicativo de IA que te ajuda a aprender de forma eficiente e divertida. Com o Alibabot, você pode:
                    <br> <br>
                    Acessar conteúdos de qualidade sobre diversas matérias e níveis de ensino.
                    Interagir com um chatbot inteligente que te auxilia nas suas dúvidas e te desafia com exercícios e quizzes.
                    Personalizar o seu plano de estudos de acordo com os seus objetivos e preferências.
                    Acompanhar o seu progresso e desempenho com gráficos e feedbacks.
                    Nesta versão, nós fizemos algumas melhorias e correções, tais como:
                    <br> <br>
                    Adicionamos novos conteúdos sobre história, geografia e literatura.
                    Melhoramos a interface do chatbot e a sua capacidade de compreensão e resposta.
                    Corrigimos alguns bugs e erros de ortografia.
                    Otimizamos o desempenho e a velocidade do aplicativo.
                    Esperamos que você goste do Alibabot e que ele te ajude a alcançar os seus sonhos. Se você tiver alguma sugestão, crítica ou elogio, por favor, entre em contato conosco. A sua opinião é muito importante para nós. Obrigado por usar o Alibabot! <span class="emoji">😊</span>
                <div class="gotodownload mt-5 p-3  w-100 rounded-5 ">
                    <p class=" mx-1 ">Ainda não baixou o Alibabot?</p>
                    <button class="btn-download p-2 px-4" onclick="window.location.href = './download.php'">Baixar última versão</button>
                </div>
            </article>

        </div>
    </section>
</body>

</html>