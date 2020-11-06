<?php
session_start();
require './classes/Usuario.php';
require './classes/UsuarioToken.php';
require './config.php';
date_default_timezone_set("Brazil/East");

if(isset($_GET['token']) && !empty($_GET['token'])) {
    $token = addslashes($_GET['token']);

    $userToken = new UsuarioToken($pdo);
    $data = date("Y/m/d H:i", strtotime('+2 hours'));
    $select = $userToken->selectArrayToken($token);
    
    if($select) {
        $_SESSION['id_usuario'] = $select['id_usuario'];
        $verificaToken = $userToken->verificaToken($token, $data);
        if($verificaToken) {
            header("location: redefinir.html");
            exit;
        } else {
            $_SESSION['msg_token'] = "Sua senha foi redefinida há pouco tempo, tente novamente mais tarde.";
            echo $_SESSION['msg_token'];
        }
    } else {
       echo "error";
    }
}