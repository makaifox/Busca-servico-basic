<?php
session_start();
require './config.php';
require './classes/Usuario.php';
require './classes/Formulario.php';
require __DIR__.'/classes/Email.php';

use PHPMailer\PHPMailer\PHPMailer;

$formulario = new Formulario($pdo);
$user = new Usuario($pdo);

$emailFuncionarios = [
    "assessoriaDeImprensa" => [
                'daniel.souza@mesquita.rj.gov.br',
                'bruno.santos@mesquita.rj.gov.br',  
                'rayra.silva@mesquita.rj.gov.br', 
                'comunicacao@mesquita.rj.gov.br', 
                'patricia.helena@mesquita.rj.gov.br', 
                'imprensa@mesquita.rj.gov.br', 
                'rafael.lobo@mesquita.rj.gov.br', 
                'everton.rocha@mesquita.rj.gov.br',   
                'andressa.santos@mesquita.rj.gov.br', 
                'thayna.silva@mesquita.rj.gov.br', 
                'renan.ferro@mesquita.rj.gov.br', 
                'alexmarques466@gmail.com',
                'alex.silva@mesquita.rj.gov.br', 
                'maira.silva@mesquita.rj.gov.br'
    ],
    "designGrafico" => [
                'daniel.souza@mesquita.rj.gov.br',
                'bruno.santos@mesquita.rj.gov.br',  
                'rayra.silva@mesquita.rj.gov.br', 
                'comunicacao@mesquita.rj.gov.br', 
                'patricia.helena@mesquita.rj.gov.br', 
                'imprensa@mesquita.rj.gov.br', 
                'rafael.lobo@mesquita.rj.gov.br', 
                'everton.rocha@mesquita.rj.gov.br',   
                'andressa.santos@mesquita.rj.gov.br', 
                'thayna.silva@mesquita.rj.gov.br', 
                'renan.ferro@mesquita.rj.gov.br', 
                'alexmarques466@gmail.com',
                'alex.silva@mesquita.rj.gov.br', 
                'maira.silva@mesquita.rj.gov.br'

    ],
    "midiaSocial" => [
                'daniel.souza@mesquita.rj.gov.br',
                'bruno.santos@mesquita.rj.gov.br',  
                'rayra.silva@mesquita.rj.gov.br', 
                'comunicacao@mesquita.rj.gov.br', 
                'patricia.helena@mesquita.rj.gov.br', 
                'imprensa@mesquita.rj.gov.br', 
                'rafael.lobo@mesquita.rj.gov.br', 
                'everton.rocha@mesquita.rj.gov.br',   
                'andressa.santos@mesquita.rj.gov.br', 
                'thayna.silva@mesquita.rj.gov.br', 
                'renan.ferro@mesquita.rj.gov.br', 
                'alexmarques466@gmail.com',
                'alex.silva@mesquita.rj.gov.br', 
                'maira.silva@mesquita.rj.gov.br'

    ],
    "fotografia" => [
                'daniel.souza@mesquita.rj.gov.br',
                'bruno.santos@mesquita.rj.gov.br',  
                'rayra.silva@mesquita.rj.gov.br', 
                'comunicacao@mesquita.rj.gov.br', 
                'patricia.helena@mesquita.rj.gov.br', 
                'imprensa@mesquita.rj.gov.br', 
                'rafael.lobo@mesquita.rj.gov.br', 
                'everton.rocha@mesquita.rj.gov.br',   
                'andressa.santos@mesquita.rj.gov.br', 
                'thayna.silva@mesquita.rj.gov.br', 
                'renan.ferro@mesquita.rj.gov.br', 
                'alexmarques466@gmail.com',
                'alex.silva@mesquita.rj.gov.br', 
                'maira.silva@mesquita.rj.gov.br'

    ],
    "audioVisual" => [
                'daniel.souza@mesquita.rj.gov.br',
                'bruno.santos@mesquita.rj.gov.br',  
                'rayra.silva@mesquita.rj.gov.br', 
                'comunicacao@mesquita.rj.gov.br', 
                'patricia.helena@mesquita.rj.gov.br', 
                'imprensa@mesquita.rj.gov.br', 
                'rafael.lobo@mesquita.rj.gov.br', 
                'everton.rocha@mesquita.rj.gov.br',   
                'andressa.santos@mesquita.rj.gov.br', 
                'thayna.silva@mesquita.rj.gov.br', 
                'renan.ferro@mesquita.rj.gov.br', 
                'alexmarques466@gmail.com',
                'alex.silva@mesquita.rj.gov.br', 
                'maira.silva@mesquita.rj.gov.br'

    ],
    "desenvolvimentoWeb" => [

                'daniel.souza@mesquita.rj.gov.br',
                'bruno.santos@mesquita.rj.gov.br',  
                'comunicacao@mesquita.rj.gov.br', 
                'everton.rocha@mesquita.rj.gov.br',   
                'alexmarques466@gmail.com',
                'alex.silva@mesquita.rj.gov.br', 
                'weslley.leite@mesquita.rj.gov.br',
                'yury.cunha@mesquita.rj.gov.br'
    ],
    "impressao" => [

    ]
];

$usuarioByEmail = $user->selectArray($_SESSION['email']);

$postArray = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);

$anexoMensagem = $_FILES['anexoDemanda']['size'] > 0 ? $anexoMensagem = "Arquivo anexado no email" : $anexoMensagem = "Anexo não enviado";
$demandaMensagem = $postArray['demanda'] ? $demandaMensagem = $postArray['demanda'] : $demandaMensagem = 'Mensagem de demanda não enviada';
$dataMensagem = $postArray['data'] ? $dataMensagem = $postArray['data'] : $demandaMensagem = "Data não enviada";
$horaMensagem = $postArray['hora'] ? $horaMensagem = $postArray['hora'] : $horaMensagem = "Hora não enviada";
$enderecoMensagem = $postArray['endereco'] ? $enderecoMensagem = $postArray['endereco'] : $enderecoMensagem = "Endereço não enviado";
$personalidadeMensagem = $postArray['personalidadeDemanda'] ? $personalidadeMensagem = $postArray['personalidadeDemanda'] : $personalidadeMensagem = "Presença da personalidade não enviado";
 
$titulo = "{$postArray['assuntoDemanda']} - {$postArray['secretariaSolicitante']}";

$mensagem = "
<div style='margin: 0 auto;'>
    <h1 style='color: red; font-weight: bold;'> ATENÇÃO!! ESTÁ É UMA MENSAGEM DE TESTE. POR FAVOR, RESPONDA ESTE EMAIL COM 'OK' COMO FORMA DE FEEDBACK. </h1>
    <fieldset>
        <h1 style='text-align: center;'>REDECOM - REQUERIMENTO DE DEMANDA DE COMUNICAÇÃO</h1>
    </fieldset>
    <fieldset>
        <legend>
            <h2>ATENÇÃO</h2>
        </legend> 
        <p style='color: red; font-weight: bold; font-size: 18px; line-height: 25px;'>
            Devido a dispensa de alguns profissionais (contratados pela ECOS) que compõem a equipe da Coordenadoria de Comunicação Social (CCS), 
            informamos que o prazo tanto para os feedbacks quanto para a execução das demandas solicitadas, podem ser protelados ou os jobs podem 
            não ser executados em curto prazo. No entanto, assim que a estrutura estiver normalizada informaremos, para que possamos retomar o fluxo constante de produção.
        </p>
    </fieldset>
    <fieldset>
        <legend>
            <h2>1 - DADOS DO SOLICITANTE</h2>
        </legend>
        <div>
            <span style='font-weight: bold;'>NOME:</span> {$postArray['nomeSolicitante']}<br>
            <span style='font-weight: bold;'>GABINETE, SECRETARIA, ÓRGÃO OU AUTARQUIA:</span> {$postArray['secretariaSolicitante']} <br>
            <span style='font-weight: bold;'>SUBSECRETARIA OU SETOR:</span> {$postArray['secretariaSolicitante2']} <br>
            <span style='font-weight: bold;'>CARGO:</span> {$postArray['cargoSolicitante']} <br>
            <span style='font-weight: bold;'>EMAIL: </span> {$postArray['emailSolicitante']} <br>
            <span style='font-weight: bold;'>TELEFONE: </span> {$postArray['telefoneSolicitante']} 
        </div>
    </fieldset>
    <fieldset>
        <legend>
            <h2>2 - DESCRIÇÃO DO REQUERIMENTO</h2>
        </legend>
        <div>
            <span style='font-weight: bold;'>ASSUNTO:</span> {$postArray['assuntoDemanda']} <br> 
            <span style='font-weight: bold;'>NECESSIDADES:</span> {$postArray['tipoDemanda']}
        </div>
    </fieldset>
    <fieldset>
        <legend>
            <h2>3 - INFORMAÇÕES DA AÇÃO, EVENTO OU INAUGURAÇÃO</h2>
        </legend>
        <div>
            <span style='font-weight: bold;'>DATA:</span> {$dataMensagem} <br>
            <span style='font-weight: bold;'>HORÁRIO:</span> {$horaMensagem}<br>
            <span style='font-weight: bold;'>ENDEREÇO:</span> {$enderecoMensagem}<br>
            <span style='font-weight: bold;'>PRESENÇA DA PERSONALIDADE:</span> {$personalidadeMensagem}
        </div>
    </fieldset>
    <fieldset>
        <legend>
            <h2>4 - OUTROS DADOS SOBRE A DEMANDA:</h2>
        </legend>
        <div>
            <span style='font-weight: bold;'>DESCRIÇÃO:</span> {$demandaMensagem}
        </div>
    </fieldset>
    <fieldset>
        <legend>
            <h2>5 - MATERIAL DE REFERÊNCIA:</h2>
        </legend>
        <div>
            <span style='font-weight: bold;'>ARQUIVOS/ANEXOS:</span>.". $anexoMensagem."
        </div>
    </fieldset>
    <fieldset>
        <legend>
            <h2>6 - COM A CIÊNCIA DO CHEFE IMEDIATO:</h2>
        </legend>
        <div>
            <span style='font-weight: bold;'>NOME: </span>". $postArray['nomeChefe'] ."<br>
            <span style='font-weight: bold;'>EMAIL: </span>". $postArray['emailChefe'] ."<br>
            <span style='font-weight: bold;'>TELEFONE: </span>". $postArray['telefoneChefe'] ."<br>
        </div>
    </fieldset>
    <fieldset>
        <legend>
            <h2>7 - O SOLICITANTE CONCORDA:</h2>
        </legend>
        <div>
            <ul style='list-style-type: none; margin: 0px; padding: 0px;'>
                <li>
                    1) Se possível, a realização de requerimentos deve ser feita com no máximo até 21 dias de antecedência
                     da data necessária de sua demanda, para não ocorrer impasses na entrega.
                </li>
                <li>
                    2) A partir da realização do requerimento, a demanda será inserida na fila de produção da CCS e respeitará a ordem de chegada.
                </li>
                <li>
                    3) O prazo para o primeiro retorno é de 72 horas, a partir da realização do requerimento, para ciência da existência do job
                </li>
                <li>
                    4) Mesmo sendo realizado o requerimento, será considerado na execução as prioridades solicitadas pelo Gabinete do Prefeito e pela Secretaria
                     de Governança, para não afetar estrategicamente o bom funcionamento da instituição 
                </li>
                <li>
                    5) Dúvidas e feedbacks, é necessário acompanhar e retornar sempre a demanda pelo e-mail recebido no ato da realização do requerimento.
                </li>
            </ul>
        </div>
    </fieldset>
    <fieldset style='margin: 20px auto;'>
        <div style='padding: 20px;'>
           <p style='text-align: center; margin: 0 auto; font-weight: bold; font-size: 26px; line-height: 42px;'>
            PREFEITURA MUNICIPAL DE MESQUITA - PMM <br>

            Requerimento feito pelo sistema da Coordenadoria de Comunicação Social(CCS). <br>

            Servidor, para realizar outros requerimentos, acesse: <a href=''>www.mesquita.rj.gov.br/redecom</a> .
           </p>

        </div>
    </fieldset>
</div>";
    
include './erro.php';

if($postArray) {
    
    if(!filter_var($postArray['nomeSolicitante'], FILTER_SANITIZE_STRIPPED) || $postArray['nomeSolicitante'] == "") {
        $_SESSION['msg']['nomeSolicitanteErro'] = "Nome do Solicitante informado é inválido!";

    } elseif ($postArray['emailSolicitante'] == "" || !filter_var($postArray['emailSolicitante'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['msg']['emailSolicitanteErro'] = "Email do Solicitante informado é inválido!";

    } elseif (!filter_var($postArray['telefoneSolicitante'], FILTER_VALIDATE_INT) || $postArray['telefoneSolicitante'] == "") {
        $_SESSION['msg']['telefoneSolicitante'] = "Telefone do Solicitante informado é inválido!";

    } elseif($postArray['emailSolicitante'] == "" || !filter_var($postArray['emailSolicitante'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['msg']['emailSolicitante'] = "Email do Solicitante informado é invalido!";

    } else {
        if($_FILES['anexoDemanda']) {
            $fileUpload = $_FILES['anexoDemanda'];
            $filePermitidos = [
                'image/png', 
                'image/jpeg', 
                'image/jpg', 
                'file/psd', 
                'file/svg', 
                'file/pdf', 
                'file/doc', 
                'file/docx',
                'file/txt', 
                'file/csv',  
                'file/xls',
                'video/avi',  
                'video/mov',  
                'video/wmv',
                'video/mp4',
            ];
            
            if(in_array($fileUpload['type'], $filePermitidos)) {
                $fileName = time().mb_strstr($fileUpload['name'], ".");
            
                move_uploaded_file($fileUpload['tmp_name'], 'arquivos/'.$fileName);

                $postArray['anexoDemanda'] = $fileName;
         
            } else {
                $_SESSION['msg']['anexoDemandaType'] = "Tipo de arquivo selecionado não permitido!";
                $postArray['anexoDemanda'] = null;
            }
        
        } elseif($_FILES['anexoDemanda']['size'] > 3276800) {
            $_SESSION['msg']['anexoDemandaErroSize'] = "O arquivo selecionado é muito grande!";
            
        } else {
            if($_FILES) {
                $_SESSION['msg']['anexoDemandaErroSelect'] = "Selecione um arquivo antes de enviar";
            }
        }

        $saveStrip = array_map("strip_tags", $postArray);
        $save = array_map("trim", $postArray);
        $_SESSION['msg']['cadastroSucesso'] = "Cadastro Realizado com Sucesso!";
        $postArray['id_usuario'] = $usuarioByEmail['id']; 
        $formulario->addForm($postArray);
        
        /*
        switch($postArray['tipoDemanda']) {
            case 'imprensa':
                foreach($emailFuncionarios['assessoriaDeImprensa'] as $email) {
                    $mail = new Email('governodemesquita@gmail.com', $email, $mensagem, $titulo, $postArray['anexoDemanda']);
                }
                break;

            case 'design':
                foreach($emailFuncionarios['designGrafico'] as $email) {
                    $mail = new Email('governodemesquita@gmail.com', $email, $mensagem, $titulo, $postArray['anexoDemanda']);
                }
                break;

            case 'social':
                foreach($emailFuncionarios['midiaSocial'] as $email) {
                    $mail = new Email('governodemesquita@gmail.com', $email, $mensagem, $titulo, $postArray['anexoDemanda']);
                }   
                break;

            case 'fotografia':
                foreach($emailFuncionarios['fotografia'] as $email) {
                    $mail = new Email('governodemesquita@gmail.com', $email, $mensagem, $titulo, $postArray['anexoDemanda'];
                }
                break;

            case 'video':
                foreach($emailFuncionarios['audioVisual'] as $email) {
                    new Email('governodemesquita@gmail.com', $email, $mensagem, $titulo, $postArray['anexoDemanda']);              
                }
                break;

            case 'web':
                foreach($emailFuncionarios['desenvolvimentoWeb'] as $email) {
                    $mail = new Email('governodemesquita@gmail.com', $email, $mensagem, $titulo, $postArray['anexoDemanda']);
                }
                break;

            case 'impressao':
                foreach($emailFuncionarios['impressao'] as $email) {
                    $mail = new Email('governodemesquita@gmail.com', $email, $mensagem, $titulo, $postArray['anexoDemanda']);
                }   
                break;
        } */

      
        

    }   
} 

header("Location: pagina-usuario.php");

//$formulario->addForm($data);

//header("Location: pagina-usuario.php");
/*
$id_usuario = $usuarioByEmail['id'];
$nomeSolicitante = filter_input(INPUT_POST, 'nomeSolicitante');
$secretariaSolicitante = $_POST['secretariaSolicitante'];
$secretariaSolicitante2 = $_POST['secretariaSolicitante2'];
$cargoSolicitante = filter_input(INPUT_POST, 'cargoSolicitante');
$emailSolicitante = filter_input(INPUT_POST, 'emailSolicitante');
$telefoneSolicitante = filter_input(INPUT_POST, 'telefoneSolicitante');
$assuntoDemanda = filter_input(INPUT_POST, 'assuntoDemanda');
$tipoDemanda = filter_input(INPUT_POST, 'tipoDemanda');
$data = filter_input(INPUT_POST, 'data');
$hora = filter_input(INPUT_POST, 'hora');
$endereco = filter_input(INPUT_POST,'endereco');
$personalidadeDemanda = filter_input(INPUT_POST, 'personalidadeDemanda');
$demanda = filter_input(INPUT_POST, 'demanda');  
$anexoDemanda = filter_input(INPUT_POST, 'anexoDemanda'); // tipo file
$nomeChefe = filter_input(INPUT_POST, 'nomeChefe');
$emailChefe = filter_input(INPUT_POST, 'emailChefe');
$telefoneChefe = filter_input(INPUT_POST, 'telefoneChefe');

if(in_array($_FILES['anexoDemanda']['type'], array('image/png', 'image/jpeg', 'image/jpg', 'image/gif', 'file/psd', 'file/cdr', 'file/tif'
, 'file/eps', 'file/svg', 'file/pdf', 'file/doc', 'file/docx',  'file/txt', 'file/csv',  'file/xls',  'file/dbs',  'file/ppt',  'video/avi',  
'video/mov',  'video/wmv',  'video/mp4',  'video/3gp',  'video/3g2',  'video/flv',  'video/mkv',  'video/rm',  'audio/mp3',  'audio/wma',  'audio/ogg',  
'audio/aac',  'audio/wav',  'audio/aiff',  'audio/pcm',  'audio/flac'))) {
    $explode = explode('/' ,$_FILES['anexoDemanda']['type']);
    echo "<pre>";
    $extensao = '.'.$explode[1];
    $nomeAnexoFile = md5(time().rand(0,1000)).$extensao;
    
    move_uploaded_file($_FILES['anexoDemanda']['tmp_name'], 'arquivos/'.$nomeAnexoFile);  
}


$data = [
    'id_usuario' => $id_usuario,
    'nomeSolicitante' => $nomeSolicitante,
    'secretariaSolicitante' => $secretariaSolicitante,
    'secretariaSolicitante2' => $secretariaSolicitante2,
    'cargoSolicitante' => $cargoSolicitante,
    'emailSolicitante' => $emailSolicitante,
    'telefoneSolicitante' => $telefoneSolicitante,
    'assuntoDemanda' => $assuntoDemanda,
    'tipoDemanda' => $tipoDemanda,
    'data' => $data,
    'hora' => $hora,
    'endereco' => $endereco,
    'personalidadeDemanda' => $personalidadeDemanda,
    'demanda' => $demanda,
    'anexoDemanda' => $nomeAnexoFile,
    'nomeChefe' => $nomeChefe,
    'emailChefe' =>$emailChefe,
    'telefoneChefe' => $telefoneChefe,
    'status' => 0
];*/