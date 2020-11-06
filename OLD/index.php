<?php
session_start();
require './config.php';
require './classes/Usuario.php';
require './classes/Anual.php';
require './classes/Janeiro.php';
require './classes/Maio.php';

$anual = new Anual($pdo);
$janeiro = new Janeiro($pdo);
$maio = new Maio($pdo);
$user = new Usuario($pdo);

if(isset($_SESSION['email'])) {
    $permissao = $user->getPermissao($_SESSION['email']);
} else {
    $permissao = $user->getPermissao(null);
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php

require "header.php";

?>

<title>Pagina principal</title>
</head>


<body>
    
    

        
<!---------------------------------------------- cabeçalho  ------------------------------------------------------>


<!---------------------------------------------- banner com paralax  ----------------------------------------------->

<?php 

    include 'banner.php';
    include 'menuIndex.php';


?>
<br/>
<br/>
<br/>
    
<div class="container-lg "> 
    <div class="row">
<!--------------------------------------------------ESPAÇO ESQUERDA ------------------------------------------------------>
        <div class="col"> </div>
          
          
<!----------------------------------------------------DIV CENTRAL -------------------------------------------------------->
        <div class="col-lg-6 border">
       
            
 <!------------------------------------------------------caixa de texto 1------------------------------------------------------------>         
 <br/>
    <br/>
 
    <div class="border col align-self-center ">
        <br/>
            <p class="h5"> O QUE É? </p>
            <br/>
            
        <p>O <b>REDECOM (Requerimento de Demandas de Comunicação)</b> 
        é um <b>sistema piloto</b> 
        (MVP - Versão Alfa 1.5 - 13092019) lançado em setembro de 2019, que tem por 
        <b>objetivo automatizar o pedido de jobs</b> que são <b>solicitados</b>
            para a Coordenadoria de Comunicação Social (CCS), 
            <b>pelas pastas que compõe a administração pública</b> da Cidade de Mesquita.
        </p>
        <br/>
    </div>          
<!--------------------------------------------------caixa de texto 2------------------------------------------------------->   
<br/>
    <div class="border col align-self-center ">
    <br/>
        <p class="h5"> COMO FUNCIONA? </p>
        <br/>
    <p>Em um <b>processo simples, rápido e prático</b>
    , com o preenchimento de um pequeno "form" de <b>apenas 07 etapas</b>
    , tanto os solicitantes quanto a Coordenadoria em questão, vão <b>formalizar os pedidos</b>
        e também entrar em uma <b>sincronia de diálogo mediante a troca de e-mails futuros</b>.
    </p>
    <br/>
    </div>  
<!--------------------------------------------------caixa de texto 3------------------------------------------------------->        
<br/>

<br/>
    <div class="border col align-self-center ">
    <br/>
        <p class="h5"> POR QUE UTILIZAR? </p>
        <br/>
    <p>Com o uso da ferramenta, será <b>possível elaborar métricas</b>, como a<b> quantidade de requerimentos</b>
        solicitados por cada pasta mensalmente e anualmente, e entender 
        <b>informações quantitativas, qualitativas e objetivas</b>
        dos tipos de trabalhos executados pela equipe responsável.
    </p>
    <p>Aos servidores da Prefeitura Municipal de Mesquita (PMM), 
        <b>é primordial que seja utilizado o REDECOM</b>
        , pois com isso, será possível favorecer 
        <b>melhorias e análises no fluxo de demandas</b>
        entre a Coordenadoria de Comunicação Social (CCS) e as pastas que administram a instituição.
    </p>
    <br/>
    </div>   
    <br/>
<br/>
<br/>


<!-----------------------------------------------importando métricas------------------------------------------------------>

</div>

<!----------------------------------------------------===ESPAÇO DIREITA -------========----------------------------------->
        <div class="col"></div>



</div>
</div>




<br/>
<br/>
<br/>






<!----------------------------------------------------===rodape -------========----------------------------------->
<br/>
<br/>
<br/>


<?php 
    include 'footer.php'
?>

    
 
</body>
</html>

