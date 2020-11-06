<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastrar</title>
</head>
<body>
    
    <div class="parallax_BG">
    
        <form class="form-cadastrar" action="cadastrar_action.php" method="POST">
           <div class="container-cadastrar-item">
               <label for="nome">Nome:</label>
               <input type="text" name="nome" required>
           </div> 
            
           <div class="container-cadastrar-item">
               <label for="email">Informe um email válido:</label>
               <input type="text" name="email" required>
            </div>   

            <div class="container-cadastrar-item">
               <label for="emailConfirma">Repita o email:</label>
               <input type="text" name="emailConfirma" required>
           </div>

           <div class="container-cadastrar-item">
               <label for="senha">Informe uma senha:</label>
               <input type="password" name="senha" required>
            </div>

            <div class="container-cadastrar-item">
                <label for="senhaConfirma">Repita a senha:</label>
                <input type="password" name="senhaConfirma" required>
            </div>

            <div class="container-cadastrar-item">
                <label for="telefone">Telefone:</label>
                <input type="number" name="tel" required>
            </div>

            <div class="container-cadastrar-item">
                <input type="submit" value="Cadastrar">
            </div>
            
        </form>
    </div>
</body>
</html>
