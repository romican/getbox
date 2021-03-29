<?php ?>
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

    <div class="container">
      <div class="content row">
<div class="main-content col-md-9 col-12">
          <h2>Калькулятор стоимости доставки</h2>
<!-- Выбор стран старт -->
<div class="row">
        <div class="calc_main col-6">
    <p class="sub_text">Страна отправления*</p>
            <select class="form-select" aria-label="Default select example">
        <option selected>Выберите страну отправления</option>
        <option value="1">США</option>
        <option value="2">Германия</option>
        <option value="3">Англия</option>
        <option value="4">Китай</option>
        
            </select>
        </div>

        <div class="calc_main col-6">
    <p class="sub_text">Страна назначения*</p>
            <select class="form-select" aria-label="Default select example">
        <option selected>Выберите страну назначения посылки</option>
        <option value="1">Беларусь</option>
        <option value="2">Россия</option>
        <option value="3">Казахстан</option>
        <option value="4">Украина</option>        
            </select>
        </div>
</div>
<!-- Выбор стран конец -->
<br><br>
<!-- выбор опций старт -->
<div class="row">
    <div class="col-md-4">
        <div class="form-check form-switch">

        <p class="sub_text">Дополнительные услуги*</p>

  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Убрать упаковку производителя</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked">Дополнительная упаковка посылки стретч или пленку</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
  <label class="form-check-label" for="flexSwitchCheckDisabled">Проверка работоспособности(временно недоступно)
</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Упаковка исх. посылки</label>
</div>
    </div>

    <div class="col-md-4">
    <p class="sub_text">Способ упаковки посылки*</p>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Коробка
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Пакет
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
  <label class="form-check-label" for="flexRadioDefault3">
  Воздушно-пузырьковая упаковочная пленка
  </label>
</div>
</div>

<div class="col-md-4">
<p class="sub_text">Способ доставки*</p>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Курьер
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Самовывоз
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
  <label class="form-check-label" for="exampleRadios3">
    Постамат(недоступно)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
  <label class="form-check-label" for="exampleRadios4">
    Отделение почты
  </label>
</div>
</div>

</div>
<!-- выбор опций конец -->
<br>
<!-- бегунок старт -->
<div class="row">
    <div class="col-12">
    <label for="customRange3" class="form-label">Бегунок просто для теста</label>
<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
    </div>
    <br>
</div>
<!-- бегунок конец -->
<br>
<!-- кнопка расчитать старт -->
<div class="row">
    <div class="col-12">
    <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">Рассчитать предварительную стоимость</button>
</div>
    </div>
</div>
<!-- кнопка расчитать конец -->
</div>

<?php include("app/include/sidebar.php");?>
      </div>
    </div>
<?php include("app/include/footer.php");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>