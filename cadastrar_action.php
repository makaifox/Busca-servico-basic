<?php
// session_start();
// require './classes/Usuario.php';
// require './config.php';



// $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// $cpfcnpj = filter_input(INPUT_POST, 'cpfcnpj', FILTER_VALIDATE_INT);
// $cep = filter_input(INPUT_POST, 'cep', FILTER_VALIDATE_INT);
// $usuario = filter_input(INPUT_POST, 'usuario',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);



// if(!$pdo) {
        
//   echo"<script language='javascript' type='text/javascript'>
//           alert('Não foi possível cadastrar esse usuário');</script>";
//         header("Location: cadastrar.php");
  
  
     
//     } else {
//       $user = new Usuario($pdo);
//       $user->add($nome,$sobrenome, $email,$cpfcnpj, $cep,$usuario,$senha);
     
//       echo"<script language='javascript' type='text/javascript'>
//       alert('Usuário cadastrado com sucesso!');</script>";

//       header("Location: index.php");
      
//       exit;
//     }

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $cpfcnpj = $_POST['cpfcnpj'] ;
    $cep = $_POST['cep'] ;
    $usuario = $_POST['usuario'];
    $senha =MD5 ($_POST['senha']) ;
    
    require './config.php';
    
   
            $query = "INSERT INTO usuarios(nome,sobrenome,email,cpfcnpj,cep,usuario,senha) VALUES(
              '$nome','$sobrenome','$email','$cpfcnpj','$cep','$usuario','$senha')";
            $insert = mysqli_query($con,$query);
    
            if($insert){
              echo"<script language='javascript' type='text/javascript'>
              alert('Usuário cadastrado com sucesso!');window.location.
              href='index.php'</script>";
            }else{
              echo"<script language='javascript' type='text/javascript'>
              alert('Não foi possível cadastrar esse usuário');";
            }
          

        

        
   