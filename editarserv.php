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
$idUser = $_SESSION["id"];

$IDuser = $_POST['IDusuario'];
$IDservico = $_POST['IDservico'];
$servico = $_POST['servico'];


require './config.php';
    
    $verifica = mysqli_query($con, "SELECT * FROM servicos WHERE id = '$IDservico' 
     AND idfoto = '$IDuser' AND servico = '$servico' ") or die("erro ao verificar o usuario");
    
    

// transforma os dados em um array
$linha = mysqli_fetch_assoc($verifica);
// calcula quantos dados retornaram
$total = mysqli_num_rows($verifica);

?>
    

    

 


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>
    <script src="assets/js/jquery.form.js" type="text/javascript"></script>

    <title>Just Virtua</title>
</head>

  <body>

    <div id="root">
        <div id="page-oferecer-form" class="container">
            <header class="page-header"><div class="top-bar-container">
                <a href="/meusServicos.php">
                    <img src="assets/img/icons/back.svg" alt="Voltar">
                </a>
                <img src="/assets/img/logo.png" alt="logo">
            </div>
            <div class="header-content">
                <strong>Edite os dados abaixo</strong>
                
                
            </div>
        </header>
        <main>
            <form id="formulario" method="post" enctype="multipart/form-data" action="edit_action_serv.php">
                <div class="fieldset">
              
                        
                    
                    <div class="fieldset">
                    <div class="input-block">
                        <label for="cost">Custo da diária / hora</label>
                        <input type="text" id="cost"  name="cost" value="<?=$linha['cost']?>" required >
                    </div>
                    <div class="input-block">
                        <label for="whatsapp">Whatsapp</label>
                        <input type="text" id="whatsapp"  name="whatsapp" value="<?=$linha['tel']?>"  required >
                    </div>
                    <div class="input-block">
                        <label for="bio">Biografia</label>
                        <textarea type="text" id="bio" class="biotextarea"   name="bio" rows="5" cols="33" required ><?=$linha['bio']?></textarea>
                    </div>
                    <label class="registro">Possui registro ?
                        <div class="radio">
                            <label>sim &nbsp;
                                <input type="radio" id="sim" name="registro" value="sim"   onclick="if(document.getElementById('registroSim').disabled==true){document.getElementById('registroSim').disabled=false};{document.getElementById('registroSim').style.backgroundColor = '#f8f9fa';};"/>
                            </label>
                        </div>
                        <div class="radio"><label>não &nbsp;
                            <input type="radio" id="nao" name="registro" value="nao" onclick="if(document.getElementById('registroSim').disabled==false){document.getElementById('registroSim').disabled=true};{document.getElementById('registroSim').value=''};{document.getElementById('registroSim').style.backgroundColor = '#b7b4bf';};">
                        </label>
                    </div>

                </label>
                <div class="input-block">
                    <label for="registro">Registro</label>
                    <input type="text" id="registroSim" name="registrosim" value="<?=$linha['registro']?>"  disabled="disabled" >

                    <input type="hidden"  name="IDusuario" value="<?=$linha['idfoto']?>" />
                                <input type="hidden"  name="servico" value="<?=$linha['servico']?>" />
                                <input type="hidden"  name="IDservico" value="<?=$linha['id']?>" />
                </div>
            </div>
                           
                </div>
                <footer>
                    <p>
                        <img src="assets/img/icons/warning.svg" alt="Aviso importante">Importante! <br>Preencha todos os dados</p>
                        <button type="submit">Alterar dados</button>
                </footer>

            </form>

            

            <script>











// dupplica as sessões do form 





$(document).ready(function(){
        $('#whatsapp').mask('(00)00000-0000');
        $('#cost').maskMoney();
        
       
});

</script>

</body>
</html>

