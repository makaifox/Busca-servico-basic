<?php
 session_start();



    $IDuser = $_POST['IDusuario'];
    $IDservico = $_POST['IDservico'];
    $servico = $_POST['servico'];

    $cost = $_POST['cost']  = ( isset($_POST['cost']) )  ? $_POST['cost'] : null;
    $whatsapp = $_POST['whatsapp']  = ( isset($_POST['whatsapp']) )  ? $_POST['whatsapp'] : null;
    $bio = $_POST['bio']  = ( isset($_POST['bio']) )  ? $_POST['bio'] : null;
    $registro = $_POST['registrosim']  = ( isset($_POST['registrosim']) )  ? $_POST['registrosim'] : null; 
    
    
    require './config.php';


        

    $alter =  mysqli_query ($con, "UPDATE servicos SET cost= '$cost',tel= '$whatsapp', bio= '$bio',registro= '$registro' WHERE id=$IDservico AND servico='$servico' AND idfoto ='$IDuser' ");

    

  
      if($alter){
        echo"<script language='javascript' type='text/javascript'>
        alert('serviço alterado com sucesso! ');window.location
        .href='meusServicos.php';</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Houve um erro, tente novamente mais tarde');window.location
        .href='editarserv.php';</script>";
      }
      mysqli_close($alter);





   
          

        

        
   