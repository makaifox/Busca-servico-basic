<?php

include('config.php');
session_start();


$nome = $_POST[‘nome’];
$sql = "DELETE FROM Cadastro WHERE NomeCliente=’$nome'"; 
mysqli_query($strcon,$sql) or die(“Erro ao tentar excluir registro”);
echo “Cliente excluído”;
mysqli_close($strcon);


?>