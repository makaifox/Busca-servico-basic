<?php
session_start();

require './config.php';
require './classes/Usuario.php';
require './classes/Formulario.php';
require './erro.php';
$email = $_SESSION['email'];
$user = new Usuario($pdo);
$formulario = new Formulario($pdo);

$array = $user->selectArray($email);
$id_usuario = $array['id'];
$permissao = $user->getPermissao($email);

if($formulario->selectForm($id_usuario)) {
    $statusFormulario = $formulario->selectForm($id_usuario);
}

if($permissao == 1 || $permissao == 2) {
    header("location: index.php");
    exit;
}

$info = $user->selectArray($email);
$nome = $info['nome'];
if(!$email) {
    header("location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    
      rel="stylesheet">
      
    <title>Bem vindo</title>
</head>
<body>


<?php
/*
include 'newpainel.php'
*/
?>


    <header class="header-pagina-usuario">

        <ul>

        <li>
        <a href="index.php" id="logo_Mesquita"><img src="./assets/img/20170221-Logotipo-PMM-Secretarias-Horizontal-Branco-CCS-285x94.png"  alt="Home" style=" max-width: 120px;"></a>
            
        </li>
            <li>
                <a href="index.php" class="voltar">Voltar a pagina inicial</a>
            </li>
                
            <li>
                <a href="sair.php">Sair</a><br>
            </li>
        </ul>
        
    </header>
    <div class="container-pagina-usuario">
        <h1> Área do Usuário </h1>
        
        
        <div class="container-box-usuario">
            <div class="box1">
               <h2>Status de Demanda:</h2> 
               
                <?php 
                if(isset($statusFormulario)) {
                    
                    foreach($statusFormulario as $indice) {
                        $data = $indice['data'];
                        $dataArray = explode('-', $data);
                        $dataBr = $dataArray[2].'/'.$dataArray[1].'/'.$dataArray[0];
                        
                        
                        if($indice['status']) {
                            echo "<p class='requerimento-finalizado'>
                                    <span>Data do Requerimento : {$dataBr}</span><br>
                                     Requerimento Finalizado
                                 </p>";
                        } else {
                            echo "<p class='requerimento-pendente'> 
                                    <span>Data do Requerimento : {$dataBr}</span><br>                           
                                    Requerimento Pendente! 
                                  </p>";
                        }
                       
                    }  
                } else {
                    echo "<p class='requerimento-zerado'> Não há requerimentos recentes. </p>";
                }

                ?>
            </div>
    
            <div class="box-meio">
    
            </div>
    
            <div class="box2">
                <h2>Faça Seu Requerimento no Botão Abaixo!</h2>
                <div class="button-form">
                    <a href="#"  class="abrir-formulario">Formulário de requerimento</a>
                </div>
            </div>
        </div>
    </div>
    

    
<div class="modal-container">
    <div class="modal modalREDECOM">
        <div class="close-modal">
            <span class="material-icons">
                close
            </span>
        </div>
        <div class="modal-content">
            <div class="container-content">
                
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">


              <form class = " form-control" method="POST" action="pagina-usuario_action.php" enctype="multipart/form-data" validate>
                      
                      <div class = "col">

                      
                          <h2> ATENÇÃO </h2>

                          <p id = "aviso_requerimento" >Devido a dispensa de alguns profissionais (contratados pela ECOS) que compõem a equipe da Coordenadoria de Comunicação Social (CCS),
                                          informamos que o prazo tanto para os feedbacks quanto para a execução das demandas solicitadas, 
                                          podem ser protelados ou os jobs podem não ser executados em curto prazo. No entanto, assim que a estrutura estiver normalizada informaremos, 
                                          para que possamos retomar o fluxo constante de produção.</p>

                  <br/>
                  <br/>

                          <p >1. IDENTIFIQUE-SE, PARA SABERMOS QUEM É VOCÊ: </p>
                      </div> 
                  
                      <div   class = "form-row">

                          <div   class = "col">
                              <label for   = "NOMESOLICITANTE" class = "form-check-label">NOME:* </label>
                              <?php if(isset($_SESSION['msg']['nomeSolicitanteErro'])) {
                                  echo "<p>".$_SESSION['msg']['nomeSolicitanteErro']."</p>";
                              } ?>
                              <input type  = "text"  class = "form-control " required maxlength = "50" placeholder = "NOME" id = "NOMESOLICITANTE" name= "nomeSolicitante">
                          </div>

                      </div> 

                      <div    class = "form-row">

                          <div    class = "col">
                              <label  for   = "SECRETARIASOLICITANTE" class = "form-check-label">SECRETARIA, ÓRGÃO OU AUTARQUIA:*</label>
                              <select class = "form-control" name= "secretariaSolicitante"  id    = "SECRETARIASOLICITANTE" required>
                                  <option value = "CGM - CONTROLADORIA">CGM - CONTROLADORIA </option>
                                  <option value = "GABINETE DO PREFEITO">GABINETE DO PREFEITO </option>
                                  <option value = "MESQUITA PREV">MESQUITA PREV </option>
                                  <option value = "OUVIDORIA">OUVIDORIA </option>
                                  <option value = "PROCON">PROCON </option>
                                  <option value = "SEMAS - ASSISTÊNCIA SOCIAL">SEMAS - ASSISTÊNCIA SOCIAL</option>
                                  <option value = "SEMED - EDUCAÇÃO">SEMED - EDUCAÇÃO</option>
                                  <option value = "SEMGOV - GOVERNANÇA">SEMGOV - GOVERNANÇA </option>
                                  <option value = "SEMIMSP - INFRAESTRUTURA, MOBILIDADE E SERVIÇOS PÚBLICOS">SEMIMSP - INFRAESTRUTURA, MOBILIDADE E SERVIÇOS PÚBLICOS </option>
                                  <option value = "SEMSOPC - SEGURANÇA, ORDEM PÚBLICA E CIDADANIA">SEMSOPC - SEGURANÇA,                ORDEM PÚBLICA E CIDADANIA</option>
                                  <option value = "SSEMUS - SAÚDE">SEMUS - SAÚDE</option>
                              </select>
                          </div>
                              
                          <div class = "col">
                                          
                              <label  for   = "SECRETARIASOLICITANTE2" class= "form-check-label">SUBSECRETARIA OU SETOR:*</label>
                                  <select class = "form-control" namespace= "SECRETARIASOLICITANTE2" id = "SECRETARIASOLICITANTE2"  name="secretariaSolicitante2" required>
                                      <option value = "AF - ASSISTÊNCIA FARMACÊUTICA">AF - ASSISTÊNCIA FARMACÊUTICA</option>
                                      <option value = "AIG - ARRECADAÇÃO IMOBILIÁRIA E GESTÃO">AIG - ARRECADAÇÃO IMOBILIÁRIA E GESTÃO </option>
                                      <option value = "CSL - COMPRAS, SERVIÇOS E LOGISTICA">CSL - COMPRAS,                              SERVIÇOS E LOGISTICA</option>
                                      <option value = "EE - EXECUTIVA DE EDUCAÇÃO">EE - EXECUTIVA DE EDUCAÇÃO</option>
                                      <option value = "FMS - FUNDO MUNICIPAL DE SAÚDE">FMS - FUNDO MUNICIPAL DE SAÚDE </option>
                                      <option value = "GOVERNO">GOVERNO </option>
                                      <option value = "OF - ORÇAMENTO E FINANÇAS">OF - ORÇAMENTO E FINANÇAS</option>
                                      <option value = "PE - PLANEJAMENTO EDUCACIONAL">PE - PLANEJAMENTO EDUCACIONAL</option>
                                      <option value = "SEMAD - ADMINISTRAÇÃO">SEMAD - ADMINISTRAÇÃO</option>
                                      <option value = "SEMCELT - CULTURA, ESPORTE, LAZER E TURISMO">SEMCELT - CULTURA,                  ESPORTE,                      LAZER E TURISMO</option>
                                      <option value = "SEMEF - FAZENDA">SEMEF - FAZENDA</option>
                                      <option value = "SEMMURB - MEIO AMBIENTE E URBANISMO">SEMMURB - MEIO AMBIENTE E URBANISMO</option>
                                      <option value = "SEMOB - OBRAS">SEMOB - OBRAS</option>
                                      <option value = "SEMSPDEC - SERVIÇOS PÚBLICOS E DEFESA CIVIL">SEMSPDEC - SERVIÇOS PÚBLICOS E DEFESA CIVIL</option>
                                      <option value = "SETRADE - TRABALHO, DESENVOLVIMENTO ECONÔMICO E AGRICULTURA">SETRADE - TRABALHO, DESENVOLVIMENTO ECONÔMICO E AGRICULTURA</option>
                                      <option value = "SETRANS - TRANSPORTE E TRÂNSITO">SETRANS - TRANSPORTE E TRÂNSITO</option>
                                      <option value = "STI - TECNOLOGIA DA INFORMAÇÃO">STI - TECNOLOGIA DA INFORMAÇÃO</option>
                                      <option value = "OUTROS">OUTROS</option>
                                  </select>
                          </div>

                      </div>  

                      <div   class = "form-row">

                          <div   class = "col-7">
                              
                              <label for   = "CARGOSOLICITANTE" class = "form-check-label">CARGO:* </label>
                              <input type  = "text" class= "form-control" required maxlength = "50" name="cargoSolicitante" placeholder = "CARGO" id = "CARGOSOLICITANTE">
                          </div>


                          <div   class = "col-3">
                              <label for   = "EMAILSOLICITANTE" class = "form-check-label">E-MAIL:* </label>
                              <input type  = "email" class = "form-control"  maxlength = "50" placeholder = "E-MAIL" id = "EMAILSOLICITANTE" name="emailSolicitante">
                          </div>

                          <div   class = "col-2">
                              <label for   = "TELEFONESOLICITANTE" class = "form-check-label">TELEFONE:* </label>
                              <input type  = "tel" class  = "form-control" required maxlength = "12" placeholder = "TELEFONE" id = "TELEFONESOLICITANTE" name="telefoneSolicitante">
                  
                          </div>
                      </div>
                                      
                  <br/>
                  <br/>
                                              
                              
                          <div class = "col">
                              <P> 2. DESCREVA A DEMANDA, PARA ENTENDERMOS O QUE VOCÊ PRECISA: </P>
                          </div>

                      <div   class = "form-row">
                          <div   class = "col">
                              <label for   = "ASSUNTODEMANDA" class = "form-check-label">ASSUNTO:* </label>

                              <input type = "text" class = "form-control" required maxlength = "50" placeholder = "DIGITE O ASSUNTO" id = "ASSUNTODEMANDA" name="assuntoDemanda">
                          </div>
                      </div>

                      <div   class = "form-row">
                          <div   class = "col">
                              <label for   = "TIPODEMANDA" class = "form-check-label">QUAL A SUA NECESSIDADE:*</label>

                              <input type = "radio" class = "form-control" id = "ASSESSORIADEIMPRENSA" name = "tipoDemanda" value="imprensa" >
                              <label for  = "ASSESSORIADEIMPRENSA" class = "form-check-label"> ASSESSORIA DE IMPRENSA (Notas Informativas ou Matérias)</label>

                              <input type = "radio"   class = "form-control" id = "DESIGNERGRAFICO" name = "tipoDemanda" value="design">
                              <label for  = "DESIGNERGRÁFICO" class = "form-check-label"> DESIGNER GRÁFICO (Peças Gráficas de Divulgação)</label>

                              <input type = "radio" class = "form-control" id = "MIDIASOCIAL" name = "tipoDemanda" value="social">
                              <label for  = "MIDIASOCIAL" class = "form-check-label">MÍDIA SOCIAL (Propagação de Conteúdo nos Canais Digitais)</label>

                              <input type = "radio" class = "form-control" id = "FOTOGRAFIA" name = "tipoDemanda" value="fotografia">
                              <label for  = "FOTOGRAFIA" class = "form-check-label">FOTOGRAFIA (Sessão ou Cobertura Fotográfica)</label>

                              <input type = "radio" class = "form-control" id = "VIDEO" name = "tipoDemanda" value="video">
                              <label for  = "VIDEO" class = "form-check-label">VÍDEO (Captura de Material Audiovisual)</label>

                              <input type = "radio"  class  = "form-control" id = "DESENVOLVIMENTOWEB" name = "tipoDemanda" value="web">
                              <label for  = "DESENVOLVIMENTOWEB" class = "form-check-label">DESENVOLVIMENTO WEB (Implementações ou Atualizações no Site/Portal)</label>

                              <input type = "radio" class  = "form-control" id = "IMPRESSAO" name = "tipoDemanda" value="impressao">
                              <label for  = "IMPRESSAO" class = "form-check-label">IMPRESSÃO EM PAPEL (Material em Folha A3 ou A4)</label>

                          </div>
                      </div>

                  <br/>
                  <br/>
                                  
                          <div class = "col">
                              <p> 3. SE A SUA DEMANDA É UMA AÇÃO, EVENTO OU INAUGURAÇÃO, INFORME: </p>
                          </div>

                      <div   class = "form-row">
                          <div   class = "col-3">
                              <label for = "DATA" class = "form-check-label ">DATA:</label>
                              <input id    = "DATA" type  = "date" class = "form-control" name= "data" required>
                          </div>
                          <div   class = "col-3">
                              <label for   = "HORA" class = "form-check-inline-label">HORÁRIO:</label>
                              <input type  = "time"  id   = "HORA" class = "form-control" name = "hora" required>
                          </div>
                      </div>

                      <div   class = "form-row">
                          <div   class = "col">
                              <label for   = "ENDERECO" class  = "form-check-label">ENDEREÇO: </label>
                              <input type  = "text"  maxlength = "100"  class = "form-control" placeholder = "ENDEREÇO" id = "ENDERECO" name="endereco" required>
                          </div>
                      </div>

                      <div   class = "form-row">
                          <div   class = "col">
                              <label for   = "PERSONALIDADEDEMANDA" class = "form-check-label">ALGUMA PERSONALIDADE ESTARÁ PRESENTE? CASO SIM, QUEM SERÁ:</label>
                              <input type  = "text"  maxlength = "50" class = "form-control" id = "PERSONALIDADEDEMANDA" name="personalidadeDemanda">

                          </div>
                      </div>

                  <br/>
                  <br/>
                          <div class = "col">
                                  <P> 4. CASO DESEJE, DESCREVA AINDA MAIS SOBRE A SUA NECESSIDADE: </P>
                          </div>
                                      
                          <div class = "col">
                                  <label    for       = "DEMANDA" class = "form-check-label">EXPLIQUE A DEMANDA DE FORMA BREVE (ATÉ 1280 CARACTERES):</label>
                                  <textarea maxlength = "1280" class    = "form-control" id = "DEMANDA" name="demanda"> </textarea>
                          </div>
                                  
                  <br/>
                  <br/>
                                  
                          <div class = "col">
                              <P> 5. CASO TENHA ALGUM MATERIAL DE REFERÊNCIA, NOS ENVIE: </P>
                          </div>
                          <div   class = "col">
                              <label for   = "anexoDemanda" class = "form-check-label"> ANEXE OS ARQUIVOS DESEJADOS (ATÉ 25MB):</label>
                              <input type="file" name="anexoDemanda"/>
                          </div>

                  <br/>
                  <br/>
                          <div class = "col">
                              <p> 6. PARA CIÊNCIA, INFORME QUEM É O SEU CHEFE IMEDIATO: </p>
                          </div>

                      <div   class = "form-row">
                          <div   class = "col-6">
                              <label for   = "NOMECHEFE" class         = "form-check-label"> NOME:* </label>
                              <input type  = "text" required maxlength = "50" class = "form-control" placeholder = "NOME" id = "NOMECHEFE" name="nomeChefe">
                          </Div>

                          <div   class = "col-4">
                              <label for   = "EMAILCHEFE" class         = "form-check-label">E-MAIL:* </label>
                              <input type  = "email"  maxlength = "50" class = "form-control" placeholder = "E-MAIL" id = "EMAILCHEFE" name="emailChefe">
                          </Div>

                          <div   class = "col-2">
                                  <label for   = "TELEFONECHEFE" class    = "form-check-label">TELEFONE:* </label>
                                  <input type  = "tel" required maxlength = "12"  class = "form-control"placeholder = "TELEFONE" id = "TELEFONECHEFE" name="telefoneChefe">
                          </div>
                      </div>
                  <br/>

                          <div class = "col">
                                  <p> 7. É NECESSÁRIO, CONCORDAR COM A METODOLOGIA DE TRABALHO DA CCS: </p>
                          </div>

                      <div   class = "form-row">
                                  
                          <div   class = "col-1">
                              <input type  = "checkbox" class = "form-control" id = "ACEITEMETODOLOGIA"  required>
                          </div> 

                          <div   class = "col-10">
                              <label for   = "ACEITEMETODOLOGIA" >Se possível, a realização de requerimentos deve ser feita com no máximo até 21 dias de antecedência da data necessária de sua demanda, para não ocorrer impasses na entrega.
                                  <br>2) A partir da realização do requerimento, a demanda será inserida na fila de produção da CCS e respeitará a ordem de chegada. 
                                  <br>3) O prazo para o primeiro retorno é de 72 horas, a partir da realização do requerimento, para ciência da existência do job. 
                                  <br>4) Mesmo sendo realizado o requerimento, será considerado na execução as prioridades solicitadas pelo Gabinete do Prefeito e pela Secretaria de Governança, para não afetar estrategicamente o bom funcionamento da instituição . 
                                  <br>5) Dúvidas e feedbacks, é necessário acompanhar e retornar sempre a demanda pelo e-mail recebido no ato da realização do requerimento.</label>
                          </div>
                                  
                  <br/>
                  <br/>

                          <div    class = "col">    
                              <button type  = "submit" id = "submit" style = " text-align: center; width: 100%; height: 50px;"  >ENVIAR REQUERIMENTO!</button>
                          </div>
                      
                      </div>

                                  
                              

              </form>
              
            </div>
        </div>
    </div>
</div>         
<?php
/*
include 'newpainel-fim.php';
*/
?>



<script src="./assets/js/modal.js"></script>
</body>
</html>

