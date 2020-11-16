<?php
  session_start();
  if(!$_SESSION['idSenha']){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Redefinir</title>
</head>
<body>
    
</body>
</html>

<div class="container-form">
    <form  class="redefinir-form" method="POST" action="redefinir_action.php">
    
        <div class="redefinir-container-item">
            <label for="password"> Digite sua nova senha: </label><br>
            <input type="password" name="senha">
        </div>
    
        <div class="redefinir-container-item">
            <input type="submit" value="Mudar senha">
        </div>
    </form>
</div>




