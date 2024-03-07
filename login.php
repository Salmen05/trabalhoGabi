<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

  <style>
    body {
      background-color: #5a082d;
    }
  </style>

  <div class="wrapper">
    <form action="#" id="frmlogar" method="POST">
      <h1>Login</h1>
      <div class="input-box">
        <input name="email" id="inEmail" type="text" placeholder="Email">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input name="senha" id="inSenha" type="password" placeholder="Password">
        <i class='bx bxs-lock-alt'></i>
      </div>

      <button href="adm.php" type="button" onclick="fazerLogin();" class="btn">Login</button>

      <div id="errorlog" style="display: none;" class="alert alert-danger" role="alert">
        A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
      </div>

      <div class="register-link mt-2">
        <p>Don´t have an account <a href="#">Register</a></p>
      </div>

    </form>

    <?php
    $options = [
      'cost' => 12
    ];
    $senha = '12345678';
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT, $options);
    echo $senhaHash;

    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/func.js"></script>
</body>

</html>