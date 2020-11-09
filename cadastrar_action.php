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

    $imagem = $_FILES['image']['tmp_name']; 
    $tamanho = $_FILES['image']['size']; 
    
    require './config.php';
    

//$tipo = $_FILES['image']['type']; 
//$nomeImagem = $_FILES['image']['name'];

if ( $imagem != "none" ) { 
    $fp = fopen($imagem, "rb"); 
    $conteudo = fread($fp, $tamanho); 
    $conteudo = addslashes($conteudo); 
    fclose($fp); 

    $query = "INSERT INTO usuarios(foto,nome,sobrenome,email,cpfcnpj,cep,usuario,senha,) VALUES(
      '$conteudo','$nome','$sobrenome','$email','$cpfcnpj','$cep','$usuario','$senha')";
    $insert = mysqli_query($con,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('Usuário cadastrado com sucesso!')";
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível cadastrar esse usuário');";
    }
  

    if(mysqli_affected_rows($conexao) > 0) 
        print "A imagem foi salva na base de dados."; 
    else 
        print "Não foi possível salvar a imagem na base de dados."; 

} else 
    print "Não foi possível carregar a imagem.";


   
          

        

        
   