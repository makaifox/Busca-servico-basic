<?php 

include('config.php');
session_start();


$IDuser = $_POST['IDusuario'];
$IDservico = $_POST['IDservico'];
$servico = $_POST['servico'];



$sql = "DELETE FROM servicos WHERE id=$IDservico AND servico='$servico' AND idfoto ='$IDuser'"; 
mysqli_query($con,$sql) or die('Erro ao tentar excluir registro');



mysqli_close($con);



    echo "<script language='javascript' type='text/javascript'>
alert('Serviço excluído com sucesso!');window.location.
href='meusServicos.php'</script>;";
 
?>