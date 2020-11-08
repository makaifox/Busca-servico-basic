<?php
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['usuario'];
$nome = $_SESSION["nome"];


?>

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
      <div id="page-landing">
          <div id="page-landing-content" class="container">
              <div id="sup-area">
                  <div class="login-area">
                      <a class="login" href="/index.php">
                        <img src="assets/img/icons/user.svg" class="user-pic" alt="foto">
                        <p> Olá, <?php echo $nome ?></p>
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
        <!-- <span class="total-connections">Total de 5 conexões já realizadas</span> -->
        </div>
    </div>
</div>
 
</body>
</html>


