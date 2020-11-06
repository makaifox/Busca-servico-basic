<?php


session_start();

require './config.php';
require './classes/Usuario.php';
require './classes/Formulario.php';
require './fpdf/fpdf.php';


class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('./assets/img/Logotipo-Vertical-Colorido-PMM-968x1024.png',90,6,30,'C');
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell(0,70,'FORMULÁRIO DE REQUERIMENTO',0,'C');
        // Line break
        $this->Ln(50);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
}



$idFormulario = $_GET['id'];

$idUsuario = $_GET['idUsuario'];

if($idUsuario) {
    $email = addslashes($_SESSION['email']);
    $user = new Usuario($pdo);
    $formulario = new Formulario($pdo);
    $usuario = $user->selectById($idUsuario);
}

$info = $formulario->selectForm($idUsuario);
$keys = array_keys($info);

if($info) {
    foreach($keys as $item) {
        $nomeAnexoDemanda = $info[$item]['anexoDemanda'];
    }
}

$select = $formulario->selectForm($idUsuario);

foreach($keys as $item) {
    $nome = "NOME: ". $select[$item]['nomeSolicitante'];
    $secretaria = "SECRETARIA, ÓRGÃO OU AUTARQUIA: ". $select[$item]['secretariaSolicitante'];
    $secretariaOutras = "SUBSECRETARIA OU SETOR: ". $select[$item]['secretariaSolicitante2'];
    $cargo = "CARGO: ". $select[$item]['cargoSolicitante'];
    $email = "E-MAIL: ". $select[$item]['emailSolicitante'];
    $tel = "TELEFONE: ". $select[$item]['telefoneSolicitante'];
    $assDemanda = "ASSUNTO: ". $select[$item]['assuntoDemanda'];
    $TipoDemanda = "QUAL A SUA NECESSIDADE: ". $select[$item]['tipoDemanda'];
    $data = "DATA: ". $select[$item]['data'];
    $hora = "HORÁRIO: ". $select[$item]['hora'];
    $end = "ENDEREÇO: ". $select[$item]['endereco'];
    $persona = "ALGUMA PERSONALIDADE ESTARÁ PRESENTE?: ". $select[$item]['personalidadeDemanda'];
    $demanda = "EXPLIQUE A DEMANDA DE FORMA BREVE: ". $select[$item]['demanda'];
    $nomeChefe = "NOME DO IMEDIATO: ". $select[$item]['nomeChefe'];
    $emailChefe = "EMAIL NOME DO IMEDIATO: ". $select[$item]['emailChefe'];
    $telChefe = "TELEFONE NOME DO IMEDIATO: ". $select[$item]['telefoneChefe'];
}




ob_start();
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','',12);
$pdf-> MultiCell(200,10,$nome);
$pdf->MultiCell(200,10,$secretariaOutras);
$pdf->MultiCell(200,10,$cargo);
$pdf->MultiCell(200,10,$email);
$pdf->MultiCell(200,10,$tel);
$pdf->MultiCell(200,10,$assDemanda);
$pdf->MultiCell(200,10,$TipoDemanda);
$pdf->MultiCell(200,10,$data);
$pdf->MultiCell(200,10,$hora);
$pdf->MultiCell(200,10,$end);
$pdf->MultiCell(200,10,$persona);
$pdf->MultiCell(200,10,$demanda);
$pdf->MultiCell(200,10,$nomeChefe);
$pdf->MultiCell(200,10,$emailChefe);
$pdf->MultiCell(200,10,$telChefe);


$pdf->Output(); 
ob_end_flush();
?>