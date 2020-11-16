<?php

session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$id = $_SESSION['id']; 
$logado = $_SESSION['usuario'];
$foto = $_SESSION["foto"];
$nome = $_SESSION["nome"];
$sobrenome = $_SESSION["sobrenome"];
$email = $_SESSION["email"];
$cpfcnpj = $_SESSION["cpfcnpj"];
$cep = $_SESSION["cep"];




?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/jquery.form.js" type="text/javascript"></script>

    <title>Just Virtua</title>
</head>

  <body>

    <div id="root">
        <div id="page-oferecer-form" class="container">
            <header class="page-header"><div class="top-bar-container">
                <a href="/home.php">
                    <img src="assets/img/icons/back.svg" alt="Voltar">
                </a>
                <img src="/assets/img/logo.png" alt="logo">
            </div>
            <div class="header-content">
                <strong>Edite seus dados abaixo</strong>

                    <div id="img-container" class="align-self-center">
                        <img id="preview-edit" src="uploads/<?php echo $foto ?>" class="img-profile-edit mx-auto d-block" >
                        <input id="img-input" type="file" name="image" class="uploadfotos uploadfotos-edit uploadfotosServico " >

           </div>
        </header>
        <main>
            <form action="edit_action.php" enctype="multipart/form-data" method="POST">
                <div class="fieldset">

                        <div class="input-block">
                            <div class="row">
                                <div class="col">    
                                    <label class="registro">Nome</label>
                                    <input type="text" id="name" placeholder="<?php echo $nome ?>" name="nome" >
                                </div>
                                <div class="col">
                                    <label class="registro">Sobrenome</label>
                                    <input type="text" id="name" placeholder="<?php echo $sobrenome ?>" name="sobrenome" >
                                </div>
                            </div>
                        </div>
                        <div class="input-block">
                            <label class="registro">Profissão</label>
                            <input type="text" id="name" placeholder="<?php echo $cpfcnpj ?>" name="profissao" >

                        </div>
                    
                        <div class="input-block">
                            <div class="row">
                                <div class="col-7"> 
                                    <label class="registro">Email</label>
                                    <input type="text" id="name" placeholder="<?php echo $email ?>" name="email" >
                                </div>
                                <div class="col-5">
                                    <label class="registro">whatsapp</label>
                                    <input type="number" id="name" placeholder="<?php echo $email ?>" name="whatsapp" >
                                </div>
                            </div>
                        </div>
                        <div class="input-block">
                            <div class="row">
                                <div class="col"> 
                                    <label class="registro">cpf ou cnpj</label>
                                    <input type="number" id="name" placeholder="<?php echo $cpfcnpj ?>" name="cnpj" >
                                </div>
                                <div class="col">
                                    <label class="registro">cep</label>
                                    <input type="number" id="name" placeholder="<?php echo $cep ?>" name="cep" >
                                </div>
                            </div>
                        </div>
                        <div class="input-block">
                            <label class="registro">Conta bancária</label>
                            <input type="text" id="name" placeholder="<?php echo $nome ?>" name="" >
                        </div>
                        </div>
                        <div class="fieldset">
                            <legend>Meios de pagamento
                                <button type="button"  onclick="add_row_schedule_pay();">+ Adicionar outro</button>
                            </legend>
                                <div class="schedule-pay" id="schedule-pay">
                                    <section  id="schedulePaySession">
                                        <div class="select-block">
                                            <label for="pagamento">Meio de pagamento</label>
                                            <select id="pagamento" name="pagamento">
                                                <option value="" disabled="" hidden="">Selecione uma opção</option>
                                                <option value="Paypal">Paypal</option>
                                                <option value="PagSeguro">PagSeguro</option>
                                                <option value="Picpay">Picpay</option>
                                                <option value="Mercado Pago">Mercado Pago</option>
                                            ></select>
                                        </div>
                                            
                                        <div class="input-block">
                                            <label for="id">Nome / ID de usuário do serviço</label>
                                            <input type="text" id="idUser" name="idUser">
                                        </div>
                                    </section>
                                </div>

                </div>
                <footer>
                    <p>
                        <img src="assets/img/icons/warning.svg" alt="Aviso importante">Importante! <br>Preencha todos os dados</p>
                        <button type="submit">Salvar o cadastro</button>
                </footer>

            </form>

            </main>
        </div>
    </div>


<script> 






// dupplica as sessões do form 

function add_row_schedule_day()
{



 $scheduleItem=$("#schedule-item section").length;
 $scheduleItem=$scheduleItem++;

 $("#schedule-item:last").after(' <div class="schedule-item" id="schedule-item"><section class="select-block" id="schedule-day-item'+$scheduleItem+'"><label for="week_day">Dia da semana</label><select id="week_day" name="week_day'+$scheduleItem+'"><option value="" disabled="" hidden="">Selecione uma opção</option><option value="Domingo">Domingo</option><option value="Segunda">Segunda-feira</option><option value="Terça">Terça-feira</option><option value="Quarta">Quarta-feira</option><option value="Quinta">Quinta-feira</option><option value="Sexta">Sexta-feira</option><option value="Sabado">Sábado</option></select></section><div class="input-block"><label for="from">Das</label><input type="time" id="from" name="fromof'+$scheduleItem+'"></div><div class="input-block"><label for="to">Até</label><input type="time" id="to" name="toof'+$scheduleItem+'"></div></div>');
 

}


function add_row_schedule_pay()
{



 $schedulePay=$("#schedule-pay section").length;
 $schedulePay=$schedulePay++;

 $("#schedule-pay:last").after(' <div class="schedule-pay" id="schedule-pay"><section id="schedulePaySession'+$schedulePay+'"><div class="select-block"><label for="pagamento">Meio de pagamento</label><select id="pagamento" name="pagamento'+$schedulePay+'"><option value="" disabled="" hidden="">Selecione uma opção</option><option value="Paypal">Paypal</option><option value="PagSeguro">PagSeguro</option><option value="Picpay">Picpay</option><option value="Mercado Pago">Mercado Pago</option></select></div><div class="input-block"><label for="id">Nome / ID de usuário do serviço</label><input type="text" id="idUser" name="idUser'+$schedulePay+'"></div></section></div>');
 



}


        function readImage() {
        if (this.files && this.files[0]) {
          var file = new FileReader();
          file.onload = function(e) {
              document.getElementById("preview-edit").src = e.target.result;
              
          };       
          file.readAsDataURL(this.files[0]);
        }
      }
      document.getElementById("img-input").addEventListener("change", readImage, false);



</script>

</body>
</html>

