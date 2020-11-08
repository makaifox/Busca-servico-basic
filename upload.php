<?php
    include('config.php');



    $servico = $_POST['servico'];
    $cost = $_POST['cost'];
    $registro = $_POST['registro'];
    $week_day = $_POST['week_day'] ;
    $week_day1 = $_POST['week_day1'] ;
    $week_day2 = $_POST['week_day2'] ;
    $week_day3 = $_POST['week_day3'] ;
    $week_day4 = $_POST['week_day4'] ;
    $week_day5 = $_POST['week_day5'] ;
    $week_day6 = $_POST['week_day6'] ;
    $from = $_POST['fromof'] ;
    $from1 = $_POST['fromof1'] ;
    $from2 = $_POST['fromof2'] ;
    $from3 = $_POST['fromof3'] ;
    $from4 = $_POST['fromof4'] ;
    $from5 = $_POST['fromof5'] ;
    $from6 = $_POST['fromof6'];
    $to = $_POST['toof'] ;
    $to1 = $_POST['toof1'] ;
    $to2 = $_POST['toof2'] ;
    $to3 = $_POST['toof3'] ;
    $to4 = $_POST['toof4'] ;
    $to5 = $_POST['toof5'] ;
    $to6 = $_POST['toof6'] ;
    $pagamento = $_POST['pagamento'];
    $pagamento1 = $_POST['pagamento1'];
    $pagamento2 = $_POST['pagamento2'];
    $pagamento3 = $_POST['pagamento3'];
    $pagamento4 = $_POST['pagamento4'];
    $pagamento5 = $_POST['pagamento5'];
    $idUser = $_POST['idUser'];
    $idUser1 = $_POST['idUser1'];
    $idUser2 = $_POST['idUser2'];
    $idUser3 = $_POST['idUser3'];
    $idUser4 = $_POST['idUser4'];
    $idUser5 = $_POST['idUser5'];


    
    
    $pasta = "uploads/";

    /* formatos de imagem permitidos */
    $permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");

    if(isset($_POST)){
        $nome_imagem    = $_FILES['imagem']['name'];
        $tamanho_imagem = $_FILES['imagem']['size'];

        /* pega a extensão do arquivo */
        $ext = strtolower(strrchr($nome_imagem,"."));

        /*  verifica se a extensão está entre as extensões permitidas */
        if(in_array($ext,$permitidos)){

            /* converte o tamanho para KB */
            $tamanho = round($tamanho_imagem / 1024);

            if($tamanho < 2048){ //se imagem for até 2MB envia
                $nome_atual = md5(uniqid(time())).$ext;
                //nome que dará a imagem
                $tmp = $_FILES['imagem']['tmp_name'];
                //caminho temporário da imagem

                /* se enviar a foto, insere o nome da foto no banco de dados */
                if(move_uploaded_file($tmp,$pasta.$nome_atual)){
                    // mysqli_query($con,"INSERT INTO servicos (foto)
                    // VALUES ('$nome_atual')");
                    echo "<br/><img src='uploads/".$nome_atual."'
                    id='previsualizar' style='  height: 10rem;width: 10rem;border-radius: 20rem !important;'>";
                     //imprime a foto na tela
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


    

    $query = "INSERT INTO servicos(servico,cost,registro,week_day,fromof,toof,pagamento,idUser,foto) VALUES(
        '$servico','$cost','$registro','$week_day','$week_day1','$week_day2','$week_day3','$week_day4','$week_day5','$week_day6','$from','$from1','$from2','$from3','$from4','$from5','$from6','$to','$to1','$to2','$to3','$to4','$to5','$to6','$pagamento','$pagamento1','$pagamento2','$pagamento3','$pagamento4','$pagamento5','$idUser','$idUser1','$idUser2','$idUser3','$idUser4','$idUser5','$nome_atual')";
      $insert = mysqli_query($con,$query);

    //   if($insert){
    //     echo"<script language='javascript' type='text/javascript'>
    //     alert('Usuário cadastrado com sucesso!');window.location.
    //     href='index.php'</script>";
    //   }else{
    //     echo"<script language='javascript' type='text/javascript'>
    //     alert('Não foi possível cadastrar esse usuário');";
    //   }
    

?>