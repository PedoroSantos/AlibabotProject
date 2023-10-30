<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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
  <link rel="stylesheet" href="./sources/styles/index.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg position-fixed w-100 text-light">
      <div class="container-fluid text-light ">
        <a class="navbar-brand fw-bolder text-light d-flex align-items-center justify-content-center" href="#"><img src="./sources/img/alibabot_logo.svg" alt="logo" width="38px" class="mx-2">Alibabot</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-light fw-lighter enter-btn" aria-current="page" href="#">Entrar</a>
            </li>
            <li class="nav-item download">
              <a class="nav-link fw-bolder" href="#">Download</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section id="hero" class="d-flex flex-row justify-content-center align-items-center w-100  ">
    <div class=" h-content d-flex flex-row justify-content-center align-items-center w-75">
      <div class="h-text d-flex flex-column text-center justify-content-center align-items-center text-light mx-4">
        <h1 class="fw-bolder">Alibabot</h1>
        <p class="fw-medium fs-5">O seu gênio da informática. Com ele, você pode acessar e aproveitar o seu computador com facilidade e segurança.
          Experimente já!</p>
        <button class="btn-download rounded-5 p-1 px-4 py-2 fs-5">Baixe Agora</button>
      </div>
      <div class="h-image container-fluid">
        <img src="./sources/img/alibabot_robot.svg" alt="">
      </div>
    </div>

  </section>

  <section id="about" class="d-flex flex-column about">
    <h2 class="sec-header text-light text-center mt-5">QUEM <span>SOMOS</span></h2>
    <div class="content h-50 d-flex justify-content-center align-items-center flex-column">

      <div class="items container mt-5">
        <div class="row text-center">
          <div class="item-col col text-light">
            <div class="about-header"><i class="fas fa-scroll fs-1 my-4"></i>
              <h2 class="fs-3">HISTÓRIA</h2>
            </div>
            <hr>
            <div class="about-text fw-normal fs-5">
              <p>
                A ideia começou como um projeto profissional, juntando
                amigos para criar algo <strong>novo</strong>.
              </p>
            </div>
          </div>
          <div class="item-col col text-light">
            <div class="about-header"><i class="fas fa-users fs-1 my-4"></i>
              <h2 class="fs-3">EQUIPE</h2>
            </div>
            <hr>
            <div class="about-text fw-normal fs-5">
              <p>Somos um grupo de nove pessoas. Alunos de <strong>TI</strong> na instituição de ensino Senac.</p>
            </div>
          </div>
          <div class="item-col col text-light">
            <div class="about-header"><i class="fas fa-bullseye fs-1 my-4"></i>
              <h2 class="fs-3">OBJETIVO</h2>
            </div>
            <hr>
            <div class="about-text fw-normal fs-5">
              <p>Temos como principal meta, incrementar o campo da <strong>educação</strong> e das <strong>IA’S</strong>.</p>
            </div>
          </div v>
        </div>
      </div>
    </div>
  </section>
  <section id="htuse">

    <h2 class="sec-header text-light text-left m-0 mx-5 mb-5">COMO <span>USAR?</span></h2>
    <br>
    <div class="video container-fluid d-flex justify-content-center align-items-center">
      <iframe class=" m-auto" src="https://www.youtube.com/embed/tgbNymZ7vqY">
      </iframe>
    </div>

  </section>

  <section id="contact">
    <div class="contact-header"></div>
    <div class="contact-text"></div>
    <footer>
      <p></p>
    </footer>
  </section>

</body>

</html>