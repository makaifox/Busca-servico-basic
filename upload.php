<?php
    include('config.php');
    session_start();


    $servico = $_POST['servico'];
    $cost = $_POST['cost'];
    $registro = $_POST['registro'];
    $week_day = $_POST['week_day'] ;
    $week_day1 = $_POST['week_day1'] = ( isset($_POST['week_day1']) )  ? $_POST['week_day1'] : null; 
    $week_day2 = $_POST['week_day2'] = ( isset($_POST['week_day2']) )  ? $_POST['week_day2'] : null;
    $week_day3 = $_POST['week_day3'] = ( isset($_POST['week_day3']) )  ? $_POST['week_day3'] : null;
    $week_day4 = $_POST['week_day4'] = ( isset($_POST['week_day4']) )  ? $_POST['week_day4'] : null;
    $week_day5 = $_POST['week_day5'] = ( isset($_POST['week_day5']) )  ? $_POST['week_day5'] : null;
    $week_day6 = $_POST['week_day6'] = ( isset($_POST['week_day6']) )  ? $_POST['week_day6'] : null;
    $from = $_POST['fromof'] ;
    $from1 = $_POST['fromof1'] = ( isset($_POST['fromof1']) )  ? $_POST['fromof1'] : null;
    $from2 = $_POST['fromof2'] = ( isset($_POST['fromof2']) )  ? $_POST['fromof2'] : null;
    $from3 = $_POST['fromof3'] = ( isset($_POST['fromof3']) )  ? $_POST['fromof3'] : null;
    $from4 = $_POST['fromof4'] = ( isset($_POST['fromof4']) )  ? $_POST['fromof4'] : null;
    $from5 = $_POST['fromof5'] = ( isset($_POST['fromof5']) )  ? $_POST['fromof5'] : null;
    $from6 = $_POST['fromof6'] = ( isset($_POST['fromof6']) )  ? $_POST['fromof6'] : null;
    $to = $_POST['toof'] ;
    $to1 = $_POST['toof1'] = ( isset($_POST['toof1']) )  ? $_POST['toof1'] : null;
    $to2 = $_POST['toof2'] = ( isset($_POST['toof2']) )  ? $_POST['toof2'] : null;
    $to3 = $_POST['toof3'] = ( isset($_POST['toof3']) )  ? $_POST['toof3'] : null;
    $to4 = $_POST['toof4'] = ( isset($_POST['toof4']) )  ? $_POST['toof4'] : null;
    $to5 = $_POST['toof5'] = ( isset($_POST['toof5']) )  ? $_POST['toof5'] : null;
    $to6 = $_POST['toof6'] = ( isset($_POST['toof6']) )  ? $_POST['toof6'] : null;
    $pagamento = $_POST['pagamento'];
    $pagamento1 = $_POST['pagamento1'] = ( isset($_POST['pagamento1']) )  ? $_POST['pagamento1'] : null;
    $pagamento2 = $_POST['pagamento2'] = ( isset($_POST['pagamento2']) )  ? $_POST['pagamento2'] : null;
    $pagamento3 = $_POST['pagamento3'] = ( isset($_POST['pagamento3']) )  ? $_POST['pagamento3'] : null;
    $pagamento4 = $_POST['pagamento4'] = ( isset($_POST['pagamento4']) )  ? $_POST['pagamento4'] : null;
    $pagamento5 = $_POST['pagamento5'] = ( isset($_POST['pagamento5']) )  ? $_POST['pagamento5'] : null;
    $idUser = $_POST['idUser'];
    $idUser1 = $_POST['idUser1'] = ( isset($_POST['idUser1']) )  ? $_POST['idUser1'] : null;
    $idUser2 = $_POST['idUser2'] = ( isset($_POST['idUser2']) )  ? $_POST['idUser2'] : null;
    $idUser3 = $_POST['idUser3'] = ( isset($_POST['idUser3']) )  ? $_POST['idUser3'] : null;
    $idUser4 = $_POST['idUser4'] = ( isset($_POST['idUser4']) )  ? $_POST['idUser4'] : null;
    $idUser5 = $_POST['idUser5'] = ( isset($_POST['idUser5']) )  ? $_POST['idUser5'] : null;
    $nome = $_SESSION["nome"];
    $sobrenome = $_SESSION["sobrenome"];
    $email = $_SESSION["email"];
    $cpfcnpj = $_SESSION["cpfcnpj"];
    $cep = $_SESSION["cep"];


    

    $query = "INSERT INTO servicos(nome,sobrenome,email,cpfcnpj,cep,servico,cost,registro,week_day,week_day1,week_day2,week_day3,week_day4,week_day5,week_day6,fromof,fromof1,fromof2,fromof3,fromof4,fromof5,fromof6,toof,toof1,toof2,toof3,toof4,toof5,toof6,pagamento,pagamento1,pagamento2,pagamento3,pagamento4,pagamento5,idUser,idUser1,idUser2,idUser3,idUser4,idUser5) 
    VALUES
    ('$nome','$sobrenome','$email','$cpfcnpj','$cep','$servico','$cost','$registro','$week_day','$week_day1','$week_day2','$week_day3','$week_day4','$week_day5','$week_day6','$from','$from1','$from2','$from3','$from4','$from5','$from6','$to','$to1','$to2','$to3','$to4','$to5','$to6','$pagamento','$pagamento1','$pagamento2','$pagamento3','$pagamento4','$pagamento5','$idUser','$idUser1','$idUser2','$idUser3','$idUser4','$idUser5')";
      $insert = mysqli_query($con,$query);

      if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('serviço cadastrado com sucesso!');window.location.
        href='home.php'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar seu serviço');window.location.
        href='oferecer.php'</script>";
      }
    

?>