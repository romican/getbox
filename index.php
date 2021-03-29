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
    <link rel="stylesheet" href="../getbox/assets/css/style.css">
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
    <!-- Блок карусели старт -->
    <div class="container">
      <div class="row">
        <h2 class="slider-title">getbox - международный ассистент доставки из США</h2>
      </div>
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/getbox/assets/images/imgonline-com-ua-Resize-QmcPguQva4gSj9Xq.jpg" class="d-block w-100" alt="..." />
            <div
              class="carousel-caption carousel-caption-hack d-none d-md-block"
            >
              <h5><a href="/getbox/single.php">Условия доставки из США</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/getbox/assets/images/123.jpg" class="d-block w-100" alt="..." />
            <div
              class="carousel-caption carousel-caption-hack d-none d-md-block"
            >
              <h5><a href="/getbox/single.php">Выдача заказов в ПВЗ</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/getbox/assets/images/lg-2.png" class="d-block w-100" alt="..." />
            <div
              class="carousel-caption carousel-caption-hack d-none d-md-block"
            >
              <h5><a href="">Здравствуйте</a></h5>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Блок карусели конец -->
    <!-- Блок MAIN СТАРТ -->
    <div class="container">
      <div class="content row">
        <!-- main content -->
        <div class="main-content col-md-9 col-12">
          <h2>Последние новости</h2>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="/getbox/assets/images/imgonline-com-ua-Resize-QmcPguQva4gSj9Xq.jpg"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="single.php">Условия доставки из США</a>
              </h3>
              <i class="far fa-user"> Имя автора</i>
              <i class="far fa-calendar"> Mar 24, 2021</i>
              <p class="preview-text">
              Мы предоставляем услуги по совместной покупке в американских интернет-магазинах.
После поступления ваших заказов на склад в США, мы формируем...
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="/getbox/assets/images/123.jpg"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="single.php">Выдача заказов в ПВЗ</a>
              </h3>
              <i class="far fa-user"> Имя автора</i>
              <i class="far fa-calendar"> Mar 24, 2021</i>
              <p class="preview-text">
              Напоминаем, что перед забором заказов необходимо погасить стоимость доставки и задолженность за заказы, образовавшуюся более чем 2 банковских дня назад...
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="/getbox/assets/images/lg-2.png"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="single.php">Здравствуйте</a>
              </h3>
              <i class="far fa-user"> Имя автора</i>
              <i class="far fa-calendar"> Mar 24, 2021</i>
              <p class="preview-text">
              Мы предоставляем услуги по совместной покупке в американских интернет-магазинах.
После поступления ваших заказов на склад в США, мы формируем за вас посылки и отправляем их в Беларусь через Россию, где они проходят таможенное оформление.
              </p>
            </div>
          </div>


        </div>
        <!-- sidebar content start -->
        <?php include("app/include/sidebar.php");?>
         <!-- sidebar content end-->
      </div>
    </div>
    <!-- Блок MAIN КОНЕЦ -->
    <!-- footer start -->
    <?php include("app/include/footer.php");?>
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
