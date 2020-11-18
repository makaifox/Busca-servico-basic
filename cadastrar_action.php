<?php


    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $profissao = $_POST['profissao'];
    $cpf = $_POST['cpf'] ;
    $cnpj = $_POST['cnpj'] ;
    $cep = $_POST['cep'] ;
    $usuario = $_POST['usuario'];
    $senha =MD5 ($_POST['senha']) ;


    
    require './config.php';
    

$pasta = "uploads/";


            if($cpf == "" ) {
                $cpfcnpj= $cnpj;
            }
            else {
                $cpfcnpj= $cpf;
            }

            echo $cpfcnpj;

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

                 
                  


                  $query = "INSERT INTO usuarios(foto,nome,sobrenome,email,tel,profissao,cpfcnpj,cep,usuario,senha) VALUES(
                    '$nome_atual','$nome','$sobrenome','$email','$tel','$profissao','$cpfcnpj','$cep','$usuario','$senha')";
                  $insert = mysqli_query($con,$query);

                  
              
                  if($insert){
                    echo"<script language='javascript' type='text/javascript'>
                    alert('Cadastro efetuado com sucesso!!');window.location
                    .href='index.php';</script>";
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







   
          

        

        
   