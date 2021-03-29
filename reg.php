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

      <form class="row justify-content-center" method="POST" action="../getbox/app/database/signup.php" enctype="multipart/form-data">
        <h2>Форма регистрации</h2>

        <div class="mb-3 col-12 col-md-4">
          <label for="formGroupExampleInput" class="form-label"
            >ФИО</label>
          <input
            type="text"
            name="full_name"
            class="form-control"
            id="formGroupExampleInput"
            placeholder="Введите свое полное имя"
          />
        </div>
        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
          <label for="formGroupExampleInput" class="form-label"
            >Логин</label>
          <input
            type="text"
            name="login"
            class="form-control"
            id="formGroupExampleInput"
            placeholder="Введите свой логин"
          />
        </div>

        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input
            type="email"
            name="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="Введите адрес электронной почты"
          />
          <div id="emailHelp" class="form-text">
            Ваш е-мейл не будет использован для спама.
          </div>
        </div>

        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input
            type="password"
            name="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Введите свой пароль"
          />
        </div>

        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword2" class="form-label"
            >Подтвердите пароль</label
          >
          <input
            type="password"
            name="password_confirm"
            class="form-control"
            id="exampleInputPassword2"
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
          <button type="submit" class="btn btn-outline-secondary">
            Регистрация
          </button>
          <a href="log.php">Войти</a>
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
