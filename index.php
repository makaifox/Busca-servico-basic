

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/icons/ico.png" type="image/png" sizes="96x96">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Just Virtua</title>
</head>
<body>
    <div id="root">
        <div id="page-login">
            <div id="page-login-content" class="container">
                <div class="logo-container">
                    <img src="/assets/img/logo.png" alt="BuscaServiço">
                    <h2>Sua plataforma de <br>serviços online.</h2>
                </div>
            </div>
            <div id="page-login-buttons" class="container">
                <div id="header-form-login">
                    <span class="login-text">Fazer login</span>
                    <a class="cadastro-mobile" href="/cadastrar.php">cadastre-se</a>
                </div>
                <div class="input-container">
                    <form action="login_action.php" method="POST">
                        <div class="input-block">
                            <label for="E-mail"></label>
                            <input type="text" id="E-mail" placeholder="Usuario" class="email" name="usuario">
                        </div>
                        <div class="input-block"><label for="senha">

                        </label>
                        <input type="password" id="E-mail" placeholder="Senha" class="password" name="senha">
                    </div>
                    <div id="footer-form">
                        <a class="text-footer-form" href="#">
                            <input type="checkbox" class="check">&nbsp;&nbsp;lembrar-me
                        </a>
                        <a class="text-footer-form" href="/esqueci.php">esqueci a senha</a>
                    </div>
                    
                        <button class="enviar" type="submit" value="Login" name="entrar" >Entrar</button>
                    
                </form>
            </div>
            <a class="cadastro-desktop" id="cadastro-desktop" href="/cadastrar.php">
                    <p>Não tem conta?</p>
                    cadastre-se
                </a>
            </div>
        </div>
    </div>

</body>
</html>