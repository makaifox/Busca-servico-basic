<?php
session_start();
require './classes/Usuario.php';
require './config.php';

$user = new Usuario($pdo);

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);

$usuarioArray = $user->selectArray($email);

if($email && $senha) {

    if( password_verify($senha, $usuarioArray['senha'])) {
        echo "válido";

        /*
        * Se a função select da classe $user retornar true significa que existe
        * um email cadastrado no banco de dados,logo o usuário já é cadastrado
        * então este usuário é redirecionado para área restrita do sistema.
        */
        $_SESSION['email'] = $usuarioArray['email'];
        header("location: pagina-usuario.php");
        exit;
    } else {
        header("location:newlogin.php");
        exit;
    }
} else {
    header("location:login.php");
    exit;
}