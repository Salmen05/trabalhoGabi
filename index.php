<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CINESTELLA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>



  <style>
    body {
      background-color: #3a5a40;
    }

    .nav {
      background: transparent;
    }
    article {
      position: relative;
    }
    section.active {
      z-index: 1;
    }

    /* Target cria a referência do elemento clicado */
    section:target {
      z-index: 2
    }
    section.active2 {

      position: absolute;
      padding: 7px;
      border: 3px solid #e9ff70;
      border-radius: 9px;
      background: transparent;
      width: 1295px;
      z-index: 0;
      height: 90px;
    }
  </style>

  <nav class="navbar">
    <div class="container-fluid">
    <h1>CINESTELLA</h1>

      <a class="text-white" class="nav-link active" aria-current="page" href="login.php">LOGAR</a>

      <div class="dropdown">
        <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          CATEGORIAS
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>

      <form class="d-flex" role="search">
        <font face="OCR A Std mt-1" color="info">
          <svg style="width: 47px;" xmlns="http://www.w3.org/2000/svg" width="19" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
          </svg>
        </font>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="container mt-3">
    <div class="row">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="width: 12rem;" src="./img/filme1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Resgate (2020)</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img style="width: 12rem;" src="img/filme2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>O Ataque (2013)</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img style="width: 70rem;" src="img/filme3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Esquadrão 6 (2019)</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <h3 class="text-white mt-5">SUGESTÕES</h3>
      <div class="row row-cols-1 row-cols-md-3 g-2">
        <div class="col-4">
          <div class="grow" class="card h-100">
            <img class="img2" style="width: 26rem;" src="img/deadpoll.png" alt="...">
            <font face="OCR A Std" color="white">
              <div class="card-body mt-2">
                <h5 class="text-center" class="card-title">DEADPOLL</h5>
                <br>
                <svg style="width: 37px;" xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                  <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                </svg>
                <svg style="width: 67px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                  <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M13.991 3l.024.001a1.5 1.5 0 0 1 .538.143.76.76 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.5 1.5 0 0 1-.143.538.76.76 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.5 1.5 0 0 1-.538-.143.76.76 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.5 1.5 0 0 1 .143-.538.76.76 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2" />
                </svg>
                <svg style="width: 67px;" xmlns="http://www.w3.org/2000/svg" width="16" height="27" fill="currentColor" class="bi bi-8-square" viewBox="0 0 16 16">
                  <path d="M10.97 9.803c0 1.394-1.218 2.355-2.988 2.355-1.763 0-2.953-.955-2.953-2.344 0-1.271.95-1.851 1.647-2.003v-.065c-.621-.193-1.33-.738-1.33-1.781 0-1.225 1.09-2.121 2.66-2.121s2.654.896 2.654 2.12c0 1.061-.738 1.595-1.336 1.782v.065c.703.152 1.647.744 1.647 1.992Zm-4.347-3.71c0 .739.586 1.255 1.383 1.255s1.377-.516 1.377-1.254c0-.733-.58-1.23-1.377-1.23s-1.383.497-1.383 1.23Zm-.281 3.645c0 .838.72 1.412 1.664 1.412.943 0 1.658-.574 1.658-1.412 0-.843-.715-1.424-1.658-1.424-.944 0-1.664.58-1.664 1.424" />
                  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                </svg>TEMPORADAS
              </div>
          </div>
        </div>

        <div class="col-4">
          <div class="grow" class="card h-100">
            <img class="img2" style="width: 26rem;" src="img/joker.jpeg" alt="...">
            <div class="card-body">
              <h5 class="text-center mt-2" class="card-title">CORINGA</h5>
              <br>
              <svg style="width: 37px;" xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
              </svg>
              <svg style="width: 67px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M13.991 3l.024.001a1.5 1.5 0 0 1 .538.143.76.76 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.5 1.5 0 0 1-.143.538.76.76 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.5 1.5 0 0 1-.538-.143.76.76 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.5 1.5 0 0 1 .143-.538.76.76 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2" />
              </svg>
            </div>

            <div class="card-footer">
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="grow" class="card h-100">
            <img style="width: 26rem;" src="img/estrelas.png" alt="...">
            <div class="card-body">
              <h5 class="text-center mt-2" class="card-title">A CULPA É DAS ESTRELAS</h5>
              <br>
              <svg style="width: 37px;" xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
              </svg>
              <svg style="width: 67px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M13.991 3l.024.001a1.5 1.5 0 0 1 .538.143.76.76 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.5 1.5 0 0 1-.143.538.76.76 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.5 1.5 0 0 1-.538-.143.76.76 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.5 1.5 0 0 1 .143-.538.76.76 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2" />
              </svg>
              <svg style="width: 67px;" xmlns="http://www.w3.org/2000/svg" width="16" height="27" fill="currentColor" class="bi bi-8-square" viewBox="0 0 16 16">
                <path d="M10.97 9.803c0 1.394-1.218 2.355-2.988 2.355-1.763 0-2.953-.955-2.953-2.344 0-1.271.95-1.851 1.647-2.003v-.065c-.621-.193-1.33-.738-1.33-1.781 0-1.225 1.09-2.121 2.66-2.121s2.654.896 2.654 2.12c0 1.061-.738 1.595-1.336 1.782v.065c.703.152 1.647.744 1.647 1.992Zm-4.347-3.71c0 .739.586 1.255 1.383 1.255s1.377-.516 1.377-1.254c0-.733-.58-1.23-1.377-1.23s-1.383.497-1.383 1.23Zm-.281 3.645c0 .838.72 1.412 1.664 1.412.943 0 1.658-.574 1.658-1.412 0-.843-.715-1.424-1.658-1.424-.944 0-1.664.58-1.664 1.424" />
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
              </svg>TEMPORADAS
              </font>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  <br>
  <div class="container mt-5">
    <font face="OCR A Std" color="info">
      <h4 class="text-center">__SESSÃO INFANTIL__</h4>
    </font>
    <div class="row">

      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/zoo.jpg">
      </div>

      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/meu.jpg">
      </div>

      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/big.jpg">
      </div>

      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/pets.jpg">
      </div>

      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/chef.jpg">
      </div>

      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/era.jpg">
      </div>
    </div>

    <div class="row">
      <div class="col-2 mt-3">
        <img style="height: 19rem;" src="img/mada.jpg">
      </div>
      <div class="col-2 mt-3">
        <img style="height: 19rem;" src="img/angry.jpg">
      </div>
      <div class="col-2 mt-3">
        <img style="height: 19rem;" src="img/rio.jpg">
      </div>
      <div class="col-2 mt-3">
        <img style="height: 19rem;" src="img/bom.jpg">
      </div>
      <div class="col-2 mt-3">
        <img style="height: 19rem;" src="img/frozen.jpg">
      </div>
      <div class="col-2 mt-3">
        <img style="height: 19rem;" src="img/toy.jpg">
      </div>
    </div>

  </div>
  <br>
  <div class="container mt-5">
    <font face="OCR A Std" color="succes">
      <h4 class="text-center">__CLÁSSICOS__</h4>
    </font>
    <div class="row">
      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/noite.jpg">
      </div>
      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/lava.jpg">
      </div>
      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/pixels.jpg">
      </div>
      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/jumanji.jpg">
      </div>
      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/the.jpg">
      </div>
      <div class="col-2 mt-2">
        <img style="height: 19rem;" src="img/home.jpg">
      </div>
    </div>


    <br>
    <div class="container mt-5">
      <font face="OCR A Std" color="succes">
        <h4 class="text-center">__TERROR__</h4>
      </font>
      <div class="row">
        <div class="col-2 mt-2">
          <img style="height: 19rem; width: 200px;" src="img/boneco do mal.jpg">
        </div>
        <div class="col-2 mt-2">
          <img style="height: 19rem; width: 200px;" src="img/aorfa.jpg">
        </div>
        <div class="col-2 mt-2">
          <img style="height: 19rem;" src="img/invocaçao do mal.jpg">
        </div>
        <div class="col-2 mt-2">
          <img style="height: 19rem;" src="img/it.jpg">
        </div>
        <div class="col-2 mt-2">
          <img style="height: 19rem;" src="img/ana.jpg">
        </div>
        <div class="col-2 mt-2">
          <img style="height: 19rem;" src="img/smile.jpg">
        </div>
      </div>


      <div class="footer mt-5">

        <article>
          <section class="active2 mt-1">

            <font face="OCR A Std" color="white">
              <div class="row mt-1">
                <h4 class="text-center">CINESTELLA</h4>
              </div>
              <div class="container">
                <svg style="width: 67px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
                <svg style="width: 67px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
                <svg style="width: 67px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                </svg>cinestellamovies765@gmail.com
              </div>
            </font>
          </section>
        </article>
      </div>
    </div>

  </div>
  </div>

  </section>
  </article>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>