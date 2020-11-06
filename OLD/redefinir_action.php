<?php
session_start();
require './classes/Usuario.php';
require './config.php';

$senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);
if ($senha) {
    $user = new Usuario($pdo);
    $id = $_SESSION['id_usuario'];
    $user->mudarSenha( $id, $senha);
    
    header("Location: login.html");
    exit;
} else {
    header("location: login.php");
    exit;
}