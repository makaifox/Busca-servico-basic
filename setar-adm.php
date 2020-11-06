<?php
session_start();
require './classes/Usuario.php';
require './config.php';

$idUsuario = filter_input(INPUT_POST, 'idUsuario');
$email = $_SESSION['email'];
$user = new Usuario($pdo);
if(filter_input(INPUT_POST, 'nivel-acesso')) {
    $nivelAcesso = filter_input(INPUT_POST, "nivel-acesso");
    $user->setPermissao($idUsuario, $nivelAcesso);
    echo $nivelAcesso;
}

header("Location: admin.php");




