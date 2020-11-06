<?php
session_start();
require './classes/Usuario.php';
require './classes/UsuarioToken.php';
require __DIR__.'/classes/Email.php';
require './config.php';


use PHPMailer\PHPMailer\PHPMailer;
echo "<pre>";


date_default_timezone_set("America/Sao_Paulo");
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
/*
* é verificado se o email foi enviado e se ele existe no banco de dados na tabela usuarios utilizando a função selectArray($email)
* se retornar true quer dizer que existe, portanto utilizando destes dados é criado uma variável $id com o id da pessoa da tabela usuarios  para ser
* inserido na tabela usuario_token, além de $token e $data.
*/

if($email) {
    $user = new Usuario($pdo);
    $select = $user->selectArray($email);
    if($select) {
        $_SESSION['idSenha'] = $select['id'];
        header("location: redefinir.php");
        echo $select['id'];
    } else {
        header("location: login.php");
    }

} else {
    header("location: login.php");
} 

?>
