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
                <strong>Que incrível que você quer oferecer seus serviços.</strong>
                
                <p>O primeiro passo é preencher esse formulário de inscrição</p>
            </div>
        </header>
        <main>
            <form id="formulario" method="post" enctype="multipart/form-data" action="upload.php">
                <div class="fieldset">
              
                        
                    <legend> Qual serviço <br>deseja oferecer ? </legend>
                    <div class="fieldset"><div class="select-block">
                        <label for="servico">Serviço</label>
                        <select id="servico" name="servico" required>
                            <option value="" disabled="" hidden="">Selecione uma opção</option>
                            <option value="Advogado">Advogado</option>
                            <option value="Artesão">Artesão</option>
                            <option value="Coaching">Coaching</option>
                            <option value="Consultor">Consultor</option>
                            <option value="Contador">Contador</option>
                            <option value="Desenvolvedor">Desenvolvedor</option>
                            <option value="Designer gráfico">Designer gráfico</option>
                            <option value="Designer">Designer</option>
                            <option value="Editor de vídeos">Editor de vídeos</option>
                            <option value="Escritor">Escritor</option>
                            <option value="Jornalista">Jornalista</option>
                            <option value="Nutricionista">Nutricionista</option>
                            <option value="Personal stylist">Personal stylist</option>
                            <option value="Professor Particular">Professor Particular</option>
                            <option value="Promoter">Promoter</option>
                            <option value="Revisor">Revisor</option>
                            <option value="técnico de TI">técnico de TI</option>
                            <option value="Tradutor">Tradutor</option>
                        </select>
                    </div>
                    <div class="input-block">
                        <label for="cost">Custo da diária / hora</label>
                        <input type="text" id="cost"  name="cost" required >
                    </div>
                    <div class="input-block">
                        <label for="whatsapp">Whatsapp</label>
                        <input type="text" id="whatsapp"  name="whatsapp" required >
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
                    <input type="text" id="registroSim" name="registrosim" disabled="disabled" >
                </div>
            </div>
            <div class="fieldset">
                <legend>Horários disponíveis
                    <button type="button" onclick="add_row_schedule_day();">+ novo horário</button>
                </legend>
                <div class="schedule-item" id="schedule-item">
                    <section class="select-block" id="schedule-day-item">
                        <label for="week_day">Dia da semana</label>
                        <select id="week_day" name="week_day">
                            <option value="" disabled="" hidden="">Selecione uma opção</option>
                            <option value="Domingo">Domingo</option>
                            <option value="Segunda">Segunda-feira</option>
                            <option value="Terça">Terça-feira</option>
                            <option value="Quarta">Quarta-feira</option>
                            <option value="Quinta">Quinta-feira</option>
                            <option value="Sexta">Sexta-feira</option>
                            <option value="Sabado">Sábado</option>
                        </select>
                    </section>
                    <div class="input-block">
                        <label for="from">Das</label>
                        <input type="time" id="from" name="fromof">
                    </div>
                    <div class="input-block">
                        <label for="to">Até</label>
                        <input type="time" id="to" name="toof">
                    </div>
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
                        <select id="pagamento" name="pagamento" onchange="exibir_ocultar()">
                            <option value="" disabled="" hidden="">Selecione uma opção</option>
                            <option value="Paypal">Paypal</option>
                            <option value="PagSeguro">PagSeguro</option>
                            <option value="Picpay">Picpay</option>
                            <option value="Mercado Pago">Mercado Pago</option>
                            <option value="Depósito Bancário" >Depósito bancário</option>
                        ></select>
                    </div>
                        
                    <div class="input-block" id="idbank" >
                        <label for="id">Nome / ID de usuário do serviço</label>
                        <input type="text" id="idUser" name="idUser">
                    </div>
                <div class="schedule-item" id="schedule-bank" style=" display:none;" >
                    <section class="select-block" id="schedule-bank-item">
                        <label for="bank">Banco</label>
                        <select id="bank" name="banco">
                            <option value="" disabled="" hidden="">Selecione uma opção</option>
                            <option value="001 – Banco do Brasil S.A.">001 – Banco do Brasil S.A.</option>
                            <option value="033 – Banco Santander (Brasil) S.A.">033 – Banco Santander (Brasil) S.A.</option>
                            <option value="104 – Caixa Econômica Federal">104 – Caixa Econômica Federal</option>
                            <option value="237 – Banco Bradesco S.A.">237 – Banco Bradesco S.A.</option>
                            <option value="341 – Banco Itaú S.A.">341 – Banco Itaú S.A.</option>
                            <option value="389 – Banco Mercantil do Brasil S.A.">389 – Banco Mercantil do Brasil S.A.</option>
                            <option value="260 – NU bank Pagamentos S.A.">260 – NU bank Pagamentos S.A.</option>
                            <option value="399 – HSBC Bank Brasil S.A.">399 – HSBC Bank Brasil S.A.</option>

                        </select>
                    </section>
                    <div class="input-block">
                        <label for="ag">Agência</label>
                        <input type="number" id="ag" name="ag">
                    </div>
                    <div class="input-block">
                        <label for="cc">Conta Corrente</label>
                        <input type="number" id="cc" name="cc">
                    </div>
                </div>
                    
                </section>
            </div>


                </div>
                <div class="fieldset">
                <legend>

                            Fotos do serviço <br>
                    </legend>
                    <input type="file" id="upload_file" name="upload_file[]" class="uploadfotos uploadfotosServico" onchange="preview_image();" multiple required>


                    <div id="img-div">
                            <div id="img-container" class="col">
                                <div class="row">
                                    <div id="image_preview" class="img-profile" ></div>
                                </div>  
                            </div>
                            <div class="col img-col">
                                 
                            </div>
                    </div>
                
                

                    <br>
                    <br>
                    <p class="col">
                       * Fotos são pendentes de avaliação
                    </p>
                    </div>
                </div>
                <footer>
                    <p>
                        <img src="assets/img/icons/warning.svg" alt="Aviso importante">Importante! <br>Preencha todos os dados</p>
                        <button type="submit">Salvar o cadastro</button>
                </footer>

            </form>

            

            <script>



//exibe opções de banco 

    function exibir_ocultar() {
    var valor = document.getElementById("pagamento").value;

    if(valor == 'Depósito Bancário'){
         $("#schedule-bank").show();
         $("#idbank").hide();
     } else {
        $("#schedule-bank").hide();
         $("#idbank").show();
     }
};


//preview das imagens

function preview_image() 
{
 var total_file=document.getElementById("upload_file").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<img style='width:10rem; height:10rem; border-radius: 3rem;' src='"+URL.createObjectURL(event.target.files[i])+"'>");
 }
}



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

$(document).ready(function(){
        $('#whatsapp').mask('(00)00000-0000');
       
});

</script>

</body>
</html>

