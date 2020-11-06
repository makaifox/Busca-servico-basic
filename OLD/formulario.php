<!DOCTYPE html>
<html>
<head>
  <title>
    REDECOM: FOMULÁRIO
  </title>
  <meta charset="UTF-8" />

<!---------------------------------------------CHAMA OS ARQUIVOS BOOTSTRAP  --------------------------------------------->
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   




<!-----------------------------------------CHAMA ARQUIVOS JAVASCRIPT DAS MÉTRICAS --------------------------------------->


<!-----------------------------------------------------CSS EXTRA -------------------------------------------------------->     
    
     <link rel="stylesheet" type="text/css" href="style/abas.css">
</head>
<body>

    <form class=" form-control">
        
        <div class="col">

    
                    <h2> ATENÇÃO </h2>

                    <p id="aviso_requerimento" >Devido a dispensa de alguns profissionais (contratados pela ECOS) que compõem a equipe da Coordenadoria de Comunicação Social (CCS),
                        informamos que o prazo tanto para os feedbacks quanto para a execução das demandas solicitadas, 
                        podem ser protelados ou os jobs podem não ser executados em curto prazo. No entanto, assim que a estrutura estiver normalizada informaremos, 
                        para que possamos retomar o fluxo constante de produção.</p>
        
        
                    <br/><br/>

                    <p >1. IDENTIFIQUE-SE, PARA SABERMOS QUEM É VOCÊ: </p>
         </div>    
        
         <div class="form-row">        
            <div class="col">
                        <label for="NOMESOLICITANTE" class="form-check-label">NOME:* </label>
                        <input type="text"  class="form-control " required maxlength="50" placeholder="NOME" id="NOMESOLICITANTE">    
                </div>
            </div>  
             <div class="form-row">  
                <div class="col-6">   
                        <label for="SECRETARIASOLICITANTE" class="form-check-label">SECRETARIA, ÓRGÃO OU AUTARQUIA:*</label>
                        <select   class="form-control" name="SECRETARIASOLICITANTE" id="SECRETARIASOLICITANTE" required>
                            <option value= "CGM - CONTROLADORIA">CGM - CONTROLADORIA </option>
                            <option value= "GABINETE DO PREFEITO">GABINETE DO PREFEITO </option>
                            <option value= "MESQUITA PREV">MESQUITA PREV </option>
                            <option value= "OUVIDORIA">OUVIDORIA </option>
                            <option value= "PROCON">PROCON </option>
                            <option value= "SEMAS - ASSISTÊNCIA SOCIAL">SEMAS - ASSISTÊNCIA SOCIAL</option>
                            <option value= "SEMED - EDUCAÇÃO">SEMED - EDUCAÇÃO</option>
                            <option value= "SEMGOV - GOVERNANÇA">SEMGOV - GOVERNANÇA </option>
                            <option value= "SEMIMSP - INFRAESTRUTURA, MOBILIDADE E SERVIÇOS PÚBLICOS">SEMIMSP - INFRAESTRUTURA, MOBILIDADE E SERVIÇOS PÚBLICOS </option>
                            <option value= "SEMSOPC - SEGURANÇA, ORDEM PÚBLICA E CIDADANIA">SEMSOPC - SEGURANÇA, ORDEM PÚBLICA E CIDADANIA</option>
                            <option value= "SSEMUS - SAÚDE">SEMUS - SAÚDE</option>
                        </select>
            </div>
              
            <div class="col-6">
                        
                    <label for="SECRETARIASOLICITANTE2" class="form-check-label">SUBSECRETARIA OU SETOR:*</label>
                    <select class="form-control" name="SECRETARIASOLICITANTE2" id="SECRETARIASOLICITANTE2" required>
                        <option value= "AF - ASSISTÊNCIA FARMACÊUTICA">AF - ASSISTÊNCIA FARMACÊUTICA</option>
                        <option value= "AIG - ARRECADAÇÃO IMOBILIÁRIA E GESTÃO">AIG - ARRECADAÇÃO IMOBILIÁRIA E GESTÃO </option>
                        <option value= "CSL - COMPRAS, SERVIÇOS E LOGISTICA">CSL - COMPRAS, SERVIÇOS E LOGISTICA</option>
                        <option value= "EE - EXECUTIVA DE EDUCAÇÃO">EE - EXECUTIVA DE EDUCAÇÃO</option>
                        <option value= "FMS - FUNDO MUNICIPAL DE SAÚDE">FMS - FUNDO MUNICIPAL DE SAÚDE </option>
                        <option value= "GOVERNO">GOVERNO </option>
                        <option value= "OF - ORÇAMENTO E FINANÇAS">OF - ORÇAMENTO E FINANÇAS</option>
                        <option value= "PE - PLANEJAMENTO EDUCACIONAL">PE - PLANEJAMENTO EDUCACIONAL</option>
                        <option value= "SEMAD - ADMINISTRAÇÃO">SEMAD - ADMINISTRAÇÃO</option>
                        <option value= "SEMCELT - CULTURA, ESPORTE, LAZER E TURISMO">SEMCELT - CULTURA, ESPORTE, LAZER E TURISMO</option>
                        <option value= "SEMEF - FAZENDA">SEMEF - FAZENDA</option>
                        <option value= "SEMMURB - MEIO AMBIENTE E URBANISMO">SEMMURB - MEIO AMBIENTE E URBANISMO</option>
                        <option value= "SEMOB - OBRAS">SEMOB - OBRAS</option>
                        <option value= "SEMSPDEC - SERVIÇOS PÚBLICOS E DEFESA CIVIL">SEMSPDEC - SERVIÇOS PÚBLICOS E DEFESA CIVIL</option>
                        <option value= "SETRADE - TRABALHO, DESENVOLVIMENTO ECONÔMICO E AGRICULTURA">SETRADE - TRABALHO, DESENVOLVIMENTO ECONÔMICO E AGRICULTURA</option>
                        <option value= "SETRANS - TRANSPORTE E TRÂNSITO">SETRANS - TRANSPORTE E TRÂNSITO</option>
                        <option value= "STI - TECNOLOGIA DA INFORMAÇÃO">STI - TECNOLOGIA DA INFORMAÇÃO</option>
                        <option value= "OUTROS">OUTROS</option>
                    </select>
                </div>
            </div>  
            <div class="form-row"> 
                <div class="col-7"> 
                    <label for="CARGOSOLICITANTE" class="form-check-label">CARGO:* </label>
                    <input type="text" class="form-control" required maxlength="50" placeholder="CARGO" id="CARGOSOLICITANTE">
                </div>  

                <div class="col-3"> 
                    <label for="EMAILSOLICITANTE" class="form-check-label">E-MAIL:* </label>
                    <input type="email" class="form-control" required maxlength="50" placeholder="E-MAIL" id="EMAILSOLICITANTE">
                </div>  
                <div class="col-2"> 
                    <label for="TELEFONESOLICITANTE" class="form-check-label">TELEFONE:* </label>
                    <input type="tel" class="form-control" required maxlength="12" placeholder="TELEFONE" id="ETELEFONESOLICITANTE">
 
            </div>
        </div>
                    <br/><br/>
                             
              
                        <div class="col">  
                    <P> 2. DESCREVA A DEMANDA, PARA ENTENDERMOS O QUE VOCÊ PRECISA:</P>
                </div>

                    <div class="form-row">
                        <div class="col">
                    <label for="ASSUNTODEMANDA" class="form-check-label">ASSUNTO:* </label>

                    <input type="text" class="form-control" required maxlength="50" placeholder="DIGITE O ASSUNTO" id="ASSUNTODEMANDA">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                    <label for="TIPODEMANDA" class="form-check-label">QUAL A SUA NECESSIDADE:*</label> 

                    <input type="radio" class="form-control" id="ASSESSORIADEIMPRENSA" name="TIPODEMANDA" >
                    <label for="ASSESSORIADEIMPRENSA" class="form-check-label"> ASSESSORIA DE IMPRENSA (Notas Informativas ou Matérias)</label>

                    <input type="radio"   class="form-control" id="DESIGNERGRAFICO" name="TIPODEMANDA" >
                    <label for="DESIGNERGRÁFICO" class="form-check-label"> DESIGNER GRÁFICO (Peças Gráficas de Divulgação)</label>

                    <input type="radio" class="form-control" id="MIDIASOCIAL" name="TIPODEMANDA" >
                    <label for="MIDIASOCIAL" class="form-check-label">MÍDIA SOCIAL (Propagação de Conteúdo nos Canais Digitais)</label>

                    <input type="radio" class="form-control" id="FOTOGRAFIA" name="TIPODEMANDA" >
                    <label for="FOTOGRAFIA" class="form-check-label">FOTOGRAFIA (Sessão ou Cobertura Fotográfica)</label>

                    <input type="radio" class="form-control" id="VIDEO" name="TIPODEMANDA" >
                    <label for="VIDEO" class="form-check-label">VÍDEO (Captura de Material Audiovisual)</label>

                    <input type="radio"  class="form-control" id="DESENVOLVIMENTOWEB" name="TIPODEMANDA" >
                    <label for="DESENVOLVIMENTOWEB" class="form-check-label">DESENVOLVIMENTO WEB (Implementações ou Atualizações no Site/Portal)</label>

                    <input type="radio" class="form-control" id="IMPRESSAO" name="TIPODEMANDA" >
                    <label for="IMPRESSAO" class="form-check-label">IMPRESSÃO EM PAPEL (Material em Folha A3 ou A4)</label>

                </div>
            </div>

                    <br/><br/>
                
                        <div class="col">
                    <p> 3. SE A SUA DEMANDA É UMA AÇÃO, EVENTO OU INAUGURAÇÃO, INFORME: </p>
                </div>

            <div class="form-row">
                <div class="col-3">
                    <label for="DATA" class="form-check-label ">DATA:</label>
                    <input id="DATA" type="date" class="form-control"  required>
                </div>
                <div class="col-3">
                    <label for="HORA" class="form-check-inline-label">HORÁRIO:</label>
                    <input type="time"  id="HORA" class="form-control" name="HORA" required>
                </div>
            </div>
                <div class="form-row">
                <div class="col">
                    <label for="ENDERECO" class="form-check-label">ENDEREÇO: </label>
                    <input type="text"  maxlength="100"  class="form-control" placeholder="ENDEREÇO" id="ENDERECO">
                </div>
            </div>
                <div class="form-row">
                <div class="col">
                    <label for="PERSONALIDADEDEMANDA" class="form-check-label">ALGUMA PERSONALIDADE ESTARÁ PRESENTE? CASO SIM, QUEM SERÁ:</label>
                    <input type="text"  maxlength="50" class="form-control" id="PERSONALIDADEDEMANDA">

                </div>
            </div>
                    <br/><br/>
                    <div class="col"> 
                    <P> 4. CASO DESEJE, DESCREVA AINDA MAIS SOBRE A SUA NECESSIDADE: </P>
                </div>
                    
                    <div class="col"> 
                    <label for="DEMANDA" class="form-check-label">EXPLIQUE A DEMANDA DE FORMA BREVE (ATÉ 1280 CARACTERES):</label>
                    <textarea  maxlength="1280" class="form-control" id="DEMANDA"> </textarea>
                </div>
                
                    <br/><br/>
                
                    <div class="col"> 
                    <P> 5. CASO TENHA ALGUM MATERIAL DE REFERÊNCIA, NOS ENVIE: </P>
                    </div>
                    <div class="col">
                    <label for="ANEXODEMANDA" class="form-check-label"> ANEXE OS ARQUIVOS DESEJADOS (ATÉ 25MB):</label>
                    <input type="file" id="ANEXODEMANDA" class="form-control" name="ANEXODEMANDA"  limit="25mb" accept="image/png, image/jpeg image/jpg, image/gif, file/psd, file/cdr, file/tif, file/eps, file/svg, file/pdf, file/doc, file/docx,  file/txt, file/csv,  file/xls,  file/dbs,  file/ppt,  video/avi,  video/mov,  video/wmv,  video/mp4,  video/3gp,  video/3g2,  video/flv,  video/mkv,  video/rm,  audio/mp3,  audio/wma,  audio/ogg,  audio/aac,  audio/wav,  audio/aiff,  audio/pcm,  audio/flac">
                    </div>

                    <br/><br/>
                    <div class="col"> 
                    <p> 6. PARA CIÊNCIA, INFORME QUEM É O SEU CHEFE IMEDIATO: </p>
                    </div>
                    <div class="form-row">
                    <div class="col-6"> 
                    <label for="NOMECHEFE" class="form-check-label"> NOME:* </label>
                    <input type="text" required maxlength="50" class="form-control" placeholder="NOME" id="NOMECHEFE">
                    </Div>
                    <div class="col-4"> 
                    <label for="EMAILCHEFE" class="form-check-label">E-MAIL:* </label>
                    <input type="email" required maxlength="50" class="form-control" placeholder="E-MAIL" id="EMAILCHEFE">
                </Div>
                <div class="col-2"> 
                    <label for="TELEFONECHEFE" class="form-check-label">TELEFONE:* </label>
                    <input type="tel" required maxlength="12"  class="form-control"placeholder="TELEFONE" id="TELEFONECHEFE">
                 </div>
                </div>
                    <br/>
                    <div class="col"> 
                    <p> 7. É NECESSÁRIO, CONCORDAR COM A METODOLOGIA DE TRABALHO DA CCS: </p>
                    </div>

                <div class="form-row">    
                    <div class="col-1">
                    <input type="checkbox" class="form-control" id="ACEITEMETODOLOGIA" name="ACEITEMETODOLOGIA" required> 
                </div> 
                <div class="col-10">
                    <label for="ACEITEMETODOLOGIA" >Se possível, a realização de requerimentos deve ser feita com no máximo até 21 dias de antecedência da data necessária de sua demanda, para não ocorrer impasses na entrega. 
                        <br>2) A partir da realização do requerimento, a demanda será inserida na fila de produção da CCS e respeitará a ordem de chegada. 
                        <br>3) O prazo para o primeiro retorno é de 72 horas, a partir da realização do requerimento, para ciência da existência do job. 
                        <br>4) Mesmo sendo realizado o requerimento, será considerado na execução as prioridades solicitadas pelo Gabinete do Prefeito e pela Secretaria de Governança, para não afetar estrategicamente o bom funcionamento da instituição . 
                        <br>5) Dúvidas e feedbacks, é necessário acompanhar e retornar sempre a demanda pelo e-mail recebido no ato da realização do requerimento.</label>
                    </div>
                
                    <br/><br/>
                
                   

                    <div class="col">
                        <button type="submit" id="submit" style=" text-align: center; width: 100%; height: 50px;"  >ENVIAR REQUERIMENTO!</button>
                    </div>

      </form>

   

</body>
</html>

