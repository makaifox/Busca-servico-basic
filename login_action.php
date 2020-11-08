<?php
// session_start();
// require './classes/Usuario.php';
// require './config.php';

// $user = new Usuario($pdo);

// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// $senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);

// $usuarioArray = $user->selectArray($email);

// if($email && $senha) {

//     if( password_verify($senha, $usuarioArray['senha'])) {
//         echo "válido";

//         /*
//         * Se a função select da classe $user retornar true significa que existe
//         * um email cadastrado no banco de dados,logo o usuário já é cadastrado
//         * então este usuário é redirecionado para área restrita do sistema.
//         */
//         $_SESSION['email'] = $usuarioArray['email'];
//         header("location: home.html");
//         exit;
//     } else {
//         header("location:index.php");
//         exit;
//     }
// } else {
//     header("location:index.php");
//     exit;
// }


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

        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        $_SESSION["nome"]  = $bd["nome"];
        $_SESSION["sobrenome"]  = $bd["sobrenome"];
        $_SESSION["email"]  = $bd["email"];
        $_SESSION["cpfcnpj"]  = $bd["cpfcnpj"];
        $_SESSION["cep"]  = $bd["cep"];

        
        
        
        

        setcookie("usuario",$usuario);
        header("Location:home.php");
      }
  }


// session_start inicia a sessão

// as variáveis login e senha recebem os dados digitados na página anterior
// $usuario = $_POST['usuario'];
// $senha = $_POST['senha'];

// echo $usuario.$senha;
// // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
// require './config.php';

// // A variavel $result pega as varias $usuario e $senha, faz uma
// //pesquisa na tabela de usuarios
// $result  = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario =
//  '$usuario' AND senha = '$senha'") or die("erro ao selecionar");
// /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
// bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
// será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
// resultado ele redirecionará para a página site.php ou retornara  para a página
// do formulário inicial para que se possa tentar novamente realizar o login */


// if(mysqli_num_rows ($result) <= 0 )
// {
//     unset ($_SESSION['usuario']);
//     unset ($_SESSION['senha']);
//     echo"<script language='javascript' type='text/javascript'>
//        alert('Login e/ou senha incorretos');window.location
//          .href='index.php';</script>";
  
// }
// else{
//     $_SESSION['usuario'] = $usuario;
//     $_SESSION['senha'] = $senha;
//     echo"<script language='javascript' type='text/javascript'>
//        alert('Seja bem vindo !');window.location
//         .href='home.php';</script>";
//   }


