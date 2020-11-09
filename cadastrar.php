<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Just Virtua</title>
</head>
<body>
  <div id="root">
    <div id="page-cadastro">
      <div id="page-cadastro-content" class="container">
        <div class="logo-container">
          <img src="/assets/img/logo.png" alt="BuscaServiço">
          <h2>Sua plataforma de <br>serviços online.</h2>
        </div>
      </div>
      <div id="page-cadastro-buttons" class="container">
      
        <div id="header-form">
          <span class="cadastro-text">Cadastro</span>
        </div>
        <div class="input-container">
      <form action="cadastrar_action.php" enctype="multipart/form-data" method="POST">
            <div>
              <legend> Preencha seus dados para começar. </legend>
              <div class="row row-img">
                  <div id="img-container" class="col">
                        <img id="preview" src="assets/img/icons/user.svg" class="img-profile" >
                  </div>
                  <div class="col img-col">
                      <input id="img-input" type="file" name="image" class="uploadfotos uploadfotosServico">
                  </div>
                </div>

              <div class="input-block"><label for="name">

              </label>
              <input type="text" id="name" placeholder="Nome" name="nome" required>
            </div>
            <div class="input-block">
              <label for="sobrenome"></label>
              <input type="text" id="sobrenome" placeholder="Sobrenome" name="sobrenome">
            </div>
            <div class="input-block">
              <label for="email"></label>
              <input type="email" id="email" placeholder="E-mail" name="email" required>
            </div>
            <div class="input-block"><label for="Cpf / CNPJ">
            </label><input type="number" id="Cpf / CNPJ" placeholder="CPF / CNPJ" name="cpfcnpj" required>
          </div>
          <div class="input-block">
            <label for="cep"></label>
            <input type="number" id="cep" placeholder="Cep" name="cep" required>
          </div>
          <div class="input-block">
            <label for="user"></label>
            <input type="text" id="user" placeholder="Usuário" name="usuario" required>
          </div>
          <div class="input-block">
            <label for="password"></label>
            <input type="password" id="password" placeholder="Senha" name="senha"  required>
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

    <script>
        function readImage() {
        if (this.files && this.files[0]) {
          var file = new FileReader();
          file.onload = function(e) {
              document.getElementById("preview").src = e.target.result;
              
          };       
          file.readAsDataURL(this.files[0]);
        }
      }
      document.getElementById("img-input").addEventListener("change", readImage, false);
    </script>

</body>
</html>