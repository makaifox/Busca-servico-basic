<?php
session_start();
require './classes/Usuario.php';
require './config.php';

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT	);
$tel = filter_input(INPUT_POST, 'tel', FILTER_VALIDATE_INT);

if($nome && $email && $senha && $tel) {
    $emailConfirma = filter_input(INPUT_POST, 'emailConfirma');
    $senhaConfirma = filter_input(INPUT_POST, 'senhaConfirma');
    if($email == $emailConfirma && $senha == $senhaConfirma) {
        $user = new Usuario($pdo);
        $user->add($nome, $email, $senha, $tel);
        
        header("Location: newlogin.php");
        exit;
    } else {
        $_SESSION['cadastro_erro'] = "Confirmação de senha ou email incorreta.";
        header("Location: cadastrar.php");
    }
}