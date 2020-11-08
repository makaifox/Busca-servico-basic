<?php
    include('config.php');
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
                    mysqli_query($con,"INSERT INTO fotos (foto)
                    VALUES ('$nome_atual')");
                    echo "<img src='uploads/".$nome_atual."'
                    id='previsualizar' style=' width: 10rem;border-radius: 2rem !important;'>";
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

?>