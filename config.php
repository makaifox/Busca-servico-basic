<?php

$dbname = 'justvi84_justvirtua';
$host = '162.241.2.224';
$user = 'justvi84_justvirtuaserv';
$pass = 'justvirtua@A2020909';

// try {
//     $pdo = new PDO("mysql:dbname={$dbname};host={$host}",$user,$pass);

//     echo"<script language='javascript' type='text/javascript'>
//         alert('banco conectado');'</script>";

// } catch(Exception $e) {
//     echo "ERRO: ".$e->getMessage();
// }


// if (!$pdo) {echo 'Não foi possível conectar ao banco MySQL.
//     '; exit;}
//     else {echo 'Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
//     ';}


// $dbname = 'justvi84_justvirtua';
// $usuario = 'justvi84_justvirtuaserv';
// $senha = 'justvirtua@A2020909';
// $hostname = '162.241.2.224:acessobancojust';

$con = mysqli_connect("162.241.2.224", "justvi84_justvirtuaserv", "justvirtua@A2020909");

mysqli_select_db ( $con, $dbname );
// $conn = mysqli_connect($hostname,$usuario,$senha); mysqli_select_db($conn,$banco) or die( 'Não foi possível conectar ao banco MySQL');
// if (!$con) {echo 'Não foi possível conectar ao banco MySQL.
// '; exit;}
// else {echo 'Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
// ';}
// mysqli_close( $con); 

?>