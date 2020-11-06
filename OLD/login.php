<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container-form">
    <form class="form-login" action="login_action.php" method="POST">
        
        <label for="email">Email:</label><br>
        <input type="text" name="email"><br><br>

        <label for="nome">Senha:</label><br>
        <input type="password" name="senha"><br><br>

        <input type="submit" value="Login"><br>
        <small><a href="cadastrar.php">Ainda não é cadastrado? Clique aqui!</a></small><br>
        <small><a href="esqueci.php">Esqueceu a Senha? clique aqui!</a></small>
    </form>
    </div>
</body>
</html>