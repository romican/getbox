<?php include("path.php");?>
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
    <!-- Блок шапки и меню старт -->
    <?php include("app/include/header.php");?>
    <!-- Блок шапки и меню конец -->    
    <!-- Блок MAIN СТАРТ -->
    <div class="container">
      <div class="content row">
        <!-- main content -->
        <div class="main-content col-md-9 col-12">
          <h2>Условия доставки из США</h2>

<div class="single_post row">
    <div class="img col-12">
    <img
        src="/getbox/assets/images/lg-3.jpeg"
        alt=""
        class="img-thumbnail"
    />
    </div>
    <div class="info">
        <i class="far fa-user"> Имя автора</i>
        <i class="far fa-calendar"> Mar 24, 2021</i>
    </div>
    <div class="single_post_text col-12">
    <p> <strong> Мы предоставляем услуги по совместной покупке в американских интернет-магазинах.</strong> <br></p>
    <p>После поступления ваших заказов на склад в США, мы формируем за вас посылки и отправляем их в Беларусь через Россию, где они проходят таможенное оформление.
Отзывы о нашей работе:
http://www.bunddler.com/assistants/getbox/feedbacks</p>
    <p> <strong> График работы:</strong> <br>
Понедельник — пятница с 9:00 до 19:00
В выходные, праздничные дни, а так же в нерабочее время покупаем и отвечаем на ваши вопросы по мере возможности.</p>
    <p><strong>Стоимость услуг:</strong> <br>
Организаторский сбор 10% от стоимости заказа(цена товаров + доставка по США).
Оплата за доставку посылки из США в Беларусь производится по тарифу из расчета 18$/кг, осуществляется после прихода заказа в Беларусь. При расчете стоимости доставки учитывается фактический вес посылки. Например, при фактическом весе в 500гр, с баланса будет списано 9$ за доставку.</p>
    <p><strong>Сроки доставки:</strong> <br>
1-2 месяца с момента вылета из США без учета сроков таможенного оформления. Сроки примерные, будем редактировать их по мере прихода новых партий посылок.</p>
    <p><strong>Оформление заказов:</strong> <br>
Заказы принимаем только через систему для сбора заказов бандлер.
http://getbox.bunddler.com/web
Для каждого магазина необходимо оформлять отдельный заказ
При оформлении заказа необходимо указывать оригинальные названия, цвета, размеры товаров как указано на сайте, без перевода.
По возможности, указывайте артикул в соответствующее поле. Если артикула на сайте нет, вставьте любой символ.
Цена указывается без учета дополнительных скидок, все пожелания по акциям, купонам и т.п. указываются в комментарии к заказу.</p>
    </div>
</div>
        </div>
        <!-- sidebar content -->
        <?php include("app/include/sidebar.php");?>
      </div>
    </div>
    <!-- Блок MAIN КОНЕЦ -->
    <!-- footer start -->
    <?php include("app/include/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- footer end -->
  </body>
</html>
