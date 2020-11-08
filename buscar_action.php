<?php


require './config.php';
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM servicos");
// executa a query
$dados = mysqli_query($con, $query) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

