<?php
 session_start();
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

    $id = $_SESSION['id'];




    $nome = $_POST['nome'] ;
    $sobrenome = $_POST['sobrenome'] ;
    $email = $_POST['email'] ;
    $cpfcnpj = $_POST['cpfcnpj'] ; 
    $cep = $_POST['cep'] ; 
    // $usuario = $_POST['usuario'];
    // $senha =MD5 ($_POST['senha']) ;

    $imagem = $_POST['image'] ;  
    // $tamanho = $_FILES['image']['size']; 
    
    require './config.php';


    
    
if($imagem != null ){


$pasta = "uploads/";

    /* formatos de imagem permitidos */
    $permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");

    if(isset($_POST)){
        $nome_imagem    = $_FILES['image']['name'];
        $tamanho_imagem = $_FILES['image']['size'];

        /* pega a extensão do arquivo */
        $ext = strtolower(strrchr($nome_imagem,"."));

        /*  verifica se a extensão está entre as extensões permitidas */
        if(in_array($ext,$permitidos)){

            /* converte o tamanho para KB */
            $tamanho = round($tamanho_imagem / 1024);

            if($tamanho < 2048){ //se imagem for até 2MB envia
                $nome_atual = md5(uniqid(time())).$ext;
                //nome que dará a imagem
                $tmp = $_FILES['image']['tmp_name'];
                //caminho temporário da imagem

                /* se enviar a foto, insere o nome da foto no banco de dados */
                if(move_uploaded_file($tmp,$pasta.$nome_atual)){

                 
                  


                  $query = "UPDATE usuarios WHERE id =$id SET foto='$nome_atual', nome= '$nome',sobrenome= '$sobrenome', email= '$email',cpfcnpj= '$cpfcnpj',cep = '$cep' ";
                  $insert = mysqli_query($con,$query);

                  
              
                  if($insert){
                    echo"<script language='javascript' type='text/javascript'>
                    alert('Cadastro alterado com sucesso!!');window.location
                    .href='home.php';</script>";
                  }else{
                    echo"<script language='javascript' type='text/javascript'>
                    alert('Houve um erro, tente novamente mais tarde');";
                  }
                





                }else{
                    echo "Falha ao enviar";
                }
            }else{
                echo "A imagem deve ser de no máximo 2MB";
            }
        }else{
            echo "Somente são aceitos arquivos do tipo Imagem";
        }
    }else{
        echo "Selecione uma imagem";
        exit;
    }

}

else {
        

    $alter =  mysqli_query ( $con, "UPDATE usuarios SET nome= '$nome',sobrenome= '$sobrenome', email= '$email',cpfcnpj= '$cpfcnpj',cep = '$cep' WHERE id=$id " );

     echo $alter;
  
      if($alter){
        echo"<script language='javascript' type='text/javascript'>
        alert('Cadastro alterado com sucesso!!');window.location
        .href='home.php';</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Houve um erro, tente novamente mais tarde');window.location
        .href='edit_user.php';</script>";
      }
    
}



// if ( $imagem != "none" && $nome != "none" ) { 
//     $fp = fopen($imagem, "rb"); 
//     $conteudo = fread($fp, $tamanho); 
//     $conteudo = addslashes($conteudo); 
//     fclose($fp); 
    

    

    
// } else 
//     print "houve um erro.";


   
          

        

        
   