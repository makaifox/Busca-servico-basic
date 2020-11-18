<?php

session_start();


$usuario = $_POST['usuario'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

require './config.php';

  if (isset($entrar)) {



    
    $verifica = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario =
    '$usuario' AND senha = '$senha'") or die("erro ao verificar o usuario");
    
    $bd = mysqli_fetch_assoc($verifica);

      if (mysqli_num_rows($verifica)<=0){

        unset ($_SESSION['usuario']);
        unset ($_SESSION['senha']);

        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php';</script>";
        die();
      }else{

        $_SESSION['id'] = $bd["id"];
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        $_SESSION["foto"]  = $bd["foto"];
        $_SESSION["nome"]  = $bd["nome"];
        $_SESSION["sobrenome"]  = $bd["sobrenome"];
        $_SESSION["email"]  = $bd["email"];
        $_SESSION["cpfcnpj"]  = $bd["cpfcnpj"];
        $_SESSION["profissao"]  = $bd["profissao"];
        $_SESSION["cep"]  = $bd["cep"];
        $_SESSION["tel"]  = $bd["tel"];

        
        
        
        

        setcookie("usuario",$usuario);
        header("Location:home.php");
      }
  }




