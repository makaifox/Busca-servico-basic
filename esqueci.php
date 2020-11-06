<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Just Virtua</title>
</head>
<body>
  <div id="root">
    <div id="page-esqueci">
      <div id="page-esqueci-content" class="container">
        <div class="logo-container">
          <img src="/assets/img/logo.png" alt="BuscaServiço">
          <h2>Sua plataforma de <br>serviços online.</h2>
        </div>
      </div>
      <div id="page-esqueci-buttons" class="container">
        <div id="header-form-esqueci">
          <span class="esqueci-text">Eita, esqueceu <br>sua senha ?</span>
        </div>
        <div class="input-container" id="input-container-esqueci">
          <form action="esqueci_action.php" method="POST">
            <div>
              <legend> Não esquenta, vamos dar um jeito nisso. </legend>
              <div class="input-block">
                <label for="email"></label>
                <input type="text" id="email" placeholder="E-mail">
              </div>
            </div>
            <footer>
              <input type="submit" class="enviar" value="Enviar">
            </footer>
          </form>
        </div>
      </div>
    </div>
  </div>

</body></html>