<?php

session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['usuario'];
$nome = $_SESSION["nome"];
$foto = $_SESSION["foto"];


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>    
    <title>Just Virtua</title>
</head>
<body>

  <div id="root">
      <div id="page-landing">
          <div id="page-landing-content" class="container">
              <div id="sup-area">
                  <div class="login-area">
                            <div class="dropdown">
                                <a class="login" href="#" id="dropdownlogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="uploads/<?php echo $foto ?>" class="user-pic" alt="foto">
                                    <p class="dropdown-toggle">Olá, <?php echo $nome ?> </p>
                                <div class="dropdown-menu" aria-labelledby="dropdownlogin">
                                    <a class="dropdown-item" href="/edit_user.php">Editar Perfil</a>
                                    <!-- <a class="dropdown-item" href="#">Editar meus serviços</a>
                                    <a class="dropdown-item" href="#">Serviços ativos</a> -->
                                </div>
                                </div>


                    </a>
                    <form  method="post">
                    <button type="submit" name="exit" class="login-button">

                    <img src="assets/img/icons/power.svg" alt="sair">
                        <?php
                            if(isset($_POST['exit'])){
                                session_unset();
                                session_destroy();
                                header("location: /index.php"); 
                                
                            }
                        ?>
                    </button>
                    </form>
                </div>
                <div id="logo-container" class="container">
                    <img src="/assets/img/logo.png" alt="logo">
                    <h2>Sua plataforma de <br>serviços online.</h2>
                </div>
            </div>
        </div>
        <div id="page-landing-buttons" class="container">
            <span class="bem-vindo">Seja bem-vindo.<br> Oque deseja fazer?</span>
            <div class="buttons-container">
                <a class="study" href="/profissionais.php">Procurar profissionais</a>
                <a class="give-classes" href="/oferecer.php">Oferecer serviços</a>
            </div>

        </div>
    </div>
</div>
 
</body>
</html>
