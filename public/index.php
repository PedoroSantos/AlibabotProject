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
  <link rel="stylesheet" href="./sources/styles/index.scss">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg position-fixed w-100 text-light">
      <div class="container-fluid text-light ">
        <a class="navbar-brand fw-bold text-light d-flex align-items-center justify-content-center" href="#"><img src="./sources/img/alibabot_logo.svg" alt="logo" width="50px" class="mx-2">Alibabot</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item download">
              <a class="nav-link" href="#">Download</a>
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
      <p class="fw-medium fs-5">O seu gênio da informática. Com ele, você pode acessar eaproveitar o seu computador com facilidade se segurança!Experimente já!</p>
      <button class="btn-download rounded-5 p-1 px-4 fs-5">Baixe Agora</button>
    </div>
    <div class="h-image container-fluid">
      <img src="./sources/img/alibabot_robot.svg" alt="">
    </div>
  </div>

  </section>
  <section id="about" class="d-flex container flex-row">

    <div class="items">
      <div class="row">
        <div class="col">
          <div class="about-header"></div>
          <div class="about-header"></div>
        </div>
        <div class="col">
          <div class="about-header"></div>
          <div class="about-header"></div>
        </div>
        <div class="col">
          <div class="about-header"></div>
          <div class="about-header"></div>
        </div>
      </div>
    </div>
  </section>
  <section id="htuse">
    <h1></h1>
    <br>
    <div class="video"></div>
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