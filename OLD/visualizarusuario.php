<?php
session_start();
require './config.php';
require './classes/Usuario.php';
require './classes/Formulario.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $email = addslashes($_SESSION['email']);
    $user = new Usuario($pdo);
    $formulario = new Formulario($pdo);

    $usuario = $user->selectById($id);
    $info = $formulario->selectForm($id);
    $array = $user->selectArray($email);
    
    $id_usuario = $array['id'];

    if($info) {
        $nomeAnexoDemanda = $info[0]['anexoDemanda'];
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php 
        include 'newpainel.php';
    ?>


    <title>Métricas</title>
</head>
<body>



    
<div class="container-metricas">


    <?php 

        if(isset($info) == false) {
            echo "<h1> Não há Demandas </h1>";
        } else {
            echo "<h1> Demandas </h1>"; 


     if ($info): 

            $i = 0;

            foreach($info as $keys => $lista ): 
                


                
                $i= $i + 1;  


                //formatação data
                $data = $lista['data'];
                $idForm = $lista['id'];


                $date = new DateTime($data);
                 
            
        ?>
            
            
             <!--Accordion -->

             
            <div class="accordion md-accordion" id="accordionEx<?php  echo $i; ?>" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- botão menu retrátil -->
                    <div class="card-header" role="tab" id="headingOne<?php echo $i; ?>">
                        <a data-toggle="collapse" data-parent="#accordionEx<?php echo $i ?>" href="#collapseOne<?php echo $i; ?>" aria-expanded="false"
                            aria-controls="collapseOne<?php echo $i; ?>" class="h5-color">
                            <h6 class="mb-0 container-botao-requerimento ">
                            Requerimento enviado em <?php  echo $date->format('d/m/y');?> <i class="fas fa-angle-down rotate-icon"></i> 
                            
                            
                                <div class="container-excluir-requerimento">  
                                    <a href="excluir-requerimento.php?id=<?=$idForm; ?>">
                                        <img class="botao-excluir" src="./assets/img/icone-excluir.png" width="30px" alt="">
                                    </a>                                                          
                                </div>
    
                          
                            
                            <div class="verifica-status">
                                <form action='verifica_status.php' method='POST'>
                                    <input type='hidden' name='id_usuario' value='<?=  $_GET['id']; ?>'>
                                    <input type='hidden' name='idForm' value='<?= $idForm; ?>'>
                                        <?php  if(!$lista['status']) {
                                           echo "<input type='submit' class='btn btn-light' value='Finalizar'>"; 
                                        } else {
                                            echo "<img   width='30px' src='./assets/img/icon-ok.png'>";
                                        }
                                        ?>
                                </form>

                                 
                                
                            </div>
                            
                        </h6>
                        </a>
                    </div>

                        <!-- corpo do menu -->
                        <div id="collapseOne<?php echo $i; ?>" class="collapse " role="tabpanel" aria-labelledby="headingOne<?php echo $i; ?>" data-parent="#accordionEx<?php echo $i; ?>">
                            <div class="card-body">
                        
                        
                                <div class="container-demanda">
                                
                                    
                                                    <form  method="GET" action="./to_pdf.php"> <input type="submit" class="btn" value="Imprimir Documento" >  
                        
                                                    <input type="hidden" name="idUsuario" value="<?= $_GET['id']; ?>">
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">


                                                        <fieldset class="fieldset-titulo">
                                                            <h2>REDECOM - REQUERIMENTO DE DEMANDA DE COMUNICAÇÃO</h2>
                                                        </fieldset>
                                                        
                                                        <fieldset class="fieldset-atencao">
                                                            <legend>ATENÇÃO</legend>
                                                            <p>
                                                            Devido a dispensa de alguns profissionais (contratados pela ECOS) que compõem a equipe da Coordenadoria de Comunicação Social (CCS), 
                                                            informamos que o prazo tanto para os feedbacks quanto para a execução das demandas solicitadas, podem ser protelados ou os jobs 
                                                            podem não ser executados em curto prazo. No entanto, assim que a estrutura estiver normalizada informaremos, para que possamos retomar 
                                                            o fluxo constante de produção.
                                                            </p>
                                                        </fieldset>

                                                        <fieldset>
                                                            <legend> 1 - DADOS DO SOLICITANTE</legend>
                                                            
                                                            
                                                            <span>NOME : </span><?php echo $lista['nomeSolicitante']; ?><br><br>
                                                            <span>GABINETE, SECRETARIA, ÓRGÃO OU AUTARQUIA : </span> <?php echo $lista['secretariaSolicitante']; ?><br><br>
                                                            <span>SUBSECRETARIA OU SETOR : </span><?php echo $lista['secretariaSolicitante2']; ?> <br><br>
                                                            <span>CARGO:</span> <?php echo $lista['cargoSolicitante']; ?><br><br>
                                                            <span>E-MAIL:</span> <?php  echo $lista['emailSolicitante']; ?> <br><br>
                                                            <span>TELEFONE:</span> <?php echo $lista['telefoneSolicitante']; ?>

                                                    
                                                        </fieldset>

                                                        <fieldset>
                                                            <legend> 2 - DESCRIÇÃO DO REQUERIMENTO</legend>

                                                            <span>ASSUNTO : </span> <?php echo $lista['assuntoDemanda']; ?> <br><br>
                                                            <span>NECESSIDADES : </span> <?php echo $lista['tipoDemanda']; ?>
                                                        </fieldset>

                                                        <fieldset>
                                                            <legend> 3 - INFORMAÇÕES DA AÇÃO, EVENTO OU INAUGURAÇÃO </legend>
                                                            <span>DATA : </span> <?php  echo $date->format('d-m-Y');?> <br><br>
                                                            <span>HORARIO : </span> <?php echo $lista['hora']; ?> <br><br>
                                                            <span>ENDEREÇO : </span> <?php echo $lista['endereco']; ?> <br><br>
                                                            <span>PRESENÇA DA PERSONALIDADE : </span> <?php echo $lista['personalidadeDemanda']; ?>
                                                        </fieldset>

                                                        <fieldset>
                                                            <legend> 4 - OUTROS DADOS SOBRE A DEMANDA </legend>
                                                            <span>DESCRIÇÃO : </span> <?php echo $lista['demanda']; ?>
                                                        </fieldset>

                                                        <fieldset>
                                                            <legend> 5 - MATERIAL DE REFERÊNCIA </legend>
                                                            <span>ARQUIVOS ANEXO : </span> <?php if($info[$keys]['anexoDemanda']) {
                                                                echo "<a class='btn' href='./arquivos/{$nomeAnexoDemanda}'  download>Download Anexo</a> ";
                                                                echo "<pre>";
                                                                print_r($info[$keys]['anexoDemanda']);
                                                                               
                                                            } else {
                                                                echo "<span style='font-weight: bold;'> Arquivo não enviado </span>";
                                                            }
                                                            ?>
                                                        </fieldset>

                                                        <fieldset>
                                                            <legend> 6 - COM A CIÊNCIA DO CHEFE IMEDIATO </legend>
                                                            <span>NOME : </span> <?php echo $lista['nomeChefe']; ?><br><br>
                                                            <span>EMAIL : </span> <?php echo $lista['emailChefe']; ?><br><br>
                                                            <span>TELEFONE : </span> <?php echo $lista['telefoneChefe']; ?>
                                                        </fieldset>

                                                        

                                                    </form>   
                            











                                                    
                                
                                </div>

                            </div>    
                        
                        </div><!-- Accordion card -->
                    
                </div>
                    <!-- Accordion wrapper --> 

            </div>
        <?php

  

            endforeach; 
     endif; 
     
    }
    
     ?>



</div>

<?php 
    include 'newpainel-fim.php';
?>

<div class="modal-container-usuario">
                                        <div class="modal-usuario">
                                            <div class="close-modal">
                                                <span class="material-icons">
                                                    close
                                                </span>
                                            </div>
                                            <div class="modal-content-usuario">
                                                <div class="container-content-usuario">
                                                    <p>Clique em confirmar para excluir</p>
                                                        <div class="img-modal-container">
                                                            <a class="link-img-modal" href="">
                                                                <img  src="./assets/img/icon-ok.png" alt="confirmar" width="50px">
                                                                
                                                            </a>
                                                        </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

<script src="assets/js/modal-visualizar.js"></script>
</body>
</html>