<?php 
session_start();
  if ($_SESSION['user']) {
    header('Location:/getbox/profile.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link id="favicon-link" rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <!-- Иконки Font Awesome -->
    <script
      src="https://kit.fontawesome.com/f803b49efc.js"
      crossorigin="anonymous"
    ></script>
    <!-- CSS Styles/style.css -->
    <link rel="stylesheet" href="/getbox/assets/css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <title>getbox - международный ассистент доставки из США</title>
  </head>

  <body>
    <?php include("app/include/header.php");?>

    <div class="container reg_form">

      <form class="row justify-content-center" method="POST" action="../getbox/app/database/signin.php">
        <h2>Авторизация</h2>
        <div class="mb-3 col-12 col-md-4">
          <label for="formGroupExampleInput" class="form-label"
            >Логин</label
          >
          <input
            type="text"
            name="login"
            class="form-control"
            id="formGroupExampleInput"
            />
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input
            type="password"
            name="password"
            class="form-control"
            id="exampleInputPassword1"
          />
          <br>
            <?php
                if ($_SESSION['message']) {
                  echo '<div class="alert alert-danger" role="alert">'.$_SESSION['message'] . '</div>';
                }
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>        
        </div>
        
        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
          <button type="submit" class="btn btn-outline-secondary">Войти</button>
          <a href="reg.php">Регистрация</a>
        </div>
      </form>
    </div>

    <?php include("app/include/footer.php");?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
