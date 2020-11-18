<?php
 session_start();


    $id = $_SESSION['id'];




    $nome = $_POST['nome']  = ( isset($_POST['nome']) )  ? $_POST['nome'] : null;
    $sobrenome = $_POST['sobrenome']  = ( isset($_POST['sobrenome']) )  ? $_POST['sobrenome'] : null;
    $email = $_POST['email']  = ( isset($_POST['email']) )  ? $_POST['email'] : null;
    $cpfcnpj = $_POST['cpfcnpj']  = ( isset($_POST['cpfcnpj']) )  ? $_POST['cpfcnpj'] : null; 
    $cep = $_POST['cep']  = ( isset($_POST['cep']) )  ? $_POST['cep'] : null;
    $tel = $_POST['tel']  = ( isset($_POST['tel']) )  ? $_POST['tel'] : null;


    $imagem = $_POST['image'] = ( isset($_POST['image']) )  ? $_POST['image'] : null;  

    
    require './config.php';

    if($nome == "" || $sobrenome == "" || $email == "" || $cpfcnpj == "" || $cep == "" || $tel == "") {
      echo "<script> alert('Por favor, preencha todos os campos!');window.location
      .href='edit_user.php';</script> </script>";
      return true;
  }
    
  
  if($cpf == "" ) {
    $cpfcnpj= $cnpj;
}
else {
    $cpfcnpj= $cpf;
}


    
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

                 


                  $query = "UPDATE usuarios WHERE id =$id SET foto='$nome_atual', nome= '$nome',sobrenome= '$sobrenome', email= '$email',cpfcnpj= '$cpfcnpj',cep = '$cep' ,tel = $tel";
                  $insert = mysqli_query($con,$query);

                  
              
                  if($insert){
                    echo"<script language='javascript' type='text/javascript'>
                    alert('Cadastro alterado com sucesso! faça login novamente');window.location
                    .href='index.php';</script>";
                  }else{
                    echo"<script language='javascript' type='text/javascript'>
                    alert('Houve um erro, tente novamente mais tarde');window.location
                    .href='edit_user.php';</script>";
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
        

    $alter =  mysqli_query ( $con, "UPDATE usuarios SET nome= '$nome',sobrenome= '$sobrenome', email= '$email',cpfcnpj= '$cpfcnpj',cep = '$cep' ,tel = $tel WHERE id=$id " );

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




   
          

        

        
   