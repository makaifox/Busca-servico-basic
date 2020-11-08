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
    <script src="assets/js/upload.js" type="text/javascript"></script>
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
            <form >
                <div class="fieldset">
                    <legend> Dados do Profissional </legend>
                    <a class="avatar" href="/Login">
                        <img src="assets/img/icons/user.svg" class="user-pic" alt="foto">
                        <p>Profissional</p>
                    </a>
                    <legend> Qual serviço <br>deseja oferecer ? </legend>
                    <div class="fieldset"><div class="select-block">
                        <label for="subject">Serviço</label>
                        <select id="subject">
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
                        <input type="text" id="cost">
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
                    <input type="text" id="registroSim" name="registro" disabled="disabled" >
                </div>
            </div>
            <div class="fieldset">
                <legend>Horários disponíveis
                    <button type="button" onclick="duplicarCamposDiaHora();">+ novo horário</button>
                </legend>
                <div class="schedule-item" id="schedule-item">
                    <div class="select-block">
                        <label for="week_day">Dia da semana</label>
                        <select id="week_day">
                            <option value="" disabled="" hidden="">Selecione uma opção</option>
                            <option value="0">Domingo</option>
                            <option value="1">Segunda-feira</option>
                            <option value="2">Terça-feira</option>
                            <option value="3">Quarta-feira</option>
                            <option value="4">Quinta-feira</option>
                            <option value="5">Sexta-feira</option>
                            <option value="6">Sábado</option>
                        </select>
                    </div>
                    <div class="input-block">
                        <label for="from">Das</label>
                        <input type="time" id="from">
                    </div>
                    <div class="input-block">
                        <label for="to">Até</label>
                        <input type="time" id="to">
                    </div>
                </div>
            <div id="schedule-day-clone">
	                </div>
        </div>
        <div class="fieldset">
            <legend>Meios de pagamento
                <button type="button"  onclick="duplicarCamposPG();">+ Adicionar outro</button>
            </legend>
            <div class="schedule-pay " id="schedule-pay">
                <div class="select-block">
                    <label for="week_day">Meio de pagamento</label>
                    <select id="week_day">
                        <option value="" disabled="" hidden="">Selecione uma opção</option>
                        <option value="Paypal">Paypal</option>
                        <option value="PagSeguro">PagSeguro</option>
                        <option value="Picpay">Picpay</option>
                        <option value="Mercado Pago">Mercado Pago</option>
                    ></select></div>
                        
                    <div class="input-block">
                        <label for="id">Nome / ID de usuário do serviço</label>
                        <input type="text" id="idUser">
                </div>
            </div>

                    <div id="schedule-pay-clone">
	                </div>
                </div>
                <div class="fieldset">
                    <legend>Fotos do serviço
                        <button type="button" >+ Adicionar mais</button>
                    </legend>
                    <div class="row">
                        
                        <div class="col">
                            <button type="submit" class="fotos">enviar arquivos</button>
                        </div>
                        <div class="col">
                        <button type="submit" class="fotos">enviar arquivos</button>
                        </div>
                    </div>
                    <p>
                        <img src="assets/img/icons/warning.svg" alt="Aviso importante">
                        Fotos são pendentes de avaliação
                    </p>
                    </div>
                </div>
                <footer>
                    <p>
                        <img src="assets/img/icons/warning.svg" alt="Aviso importante">Importante! <br>Preencha todos os dados</p>
                        <button type="submit">Salvar o cadastro</button>
                </footer>

            </form>

            
            












            <form id="formulario" method="post" enctype="multipart/form-data" action="upload.php">

<input type="file" id="imagem" name="imagem"  class="uploadfotos"/>
</form>
<div id="visualizar"></div>

























            

            
            </main>
        </div>
    </div>


<script> 

// dupplica as sessões do form 

//sessão dia da semana
function duplicarCamposDiaHora(){
	var clone = document.getElementById('schedule-item').cloneNode(true);
	var destino = document.getElementById('schedule-day-clone');
	destino.appendChild (clone);
	
	var camposClonados = clone.getElementsById('schedule-day');
	
	for(i=0; i<camposClonados.length;i++){
		camposClonados[i].value = '';
	}	
}

//sessão meio de pagamento
function duplicarCamposPG(){
	var clone = document.getElementById('schedule-pay').cloneNode(true);
	var destino = document.getElementById('schedule-pay-clone');
	destino.appendChild (clone);
	
	var camposClonados = clone.getElementsById('schedule-pay');
	
	for(i=0; i<camposClonados.length;i++){
		camposClonados[i].value = '';
	}	
}

$(document).ready(function(){
     /* #imagem é o id do input, ao alterar o conteudo do input execurará a função baixo */
     $('#imagem').live('change',function(){
         $('#visualizar').html('<img src="/assets/img/ajax-loader.gif" alt="Enviando..." style="width: 7rem;"/> Enviando...');
        /* Efetua o Upload sem dar refresh na pagina */           $('#formulario').ajaxForm({
            target:'#visualizar' // o callback será no elemento com o id #visualizar
         }).submit();
     });
 })

</script>
   
</body>
</html>

