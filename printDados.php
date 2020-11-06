<?php


// definições de host, database, usuário e senha
include './config.php';


// cria a instrução SQL que vai selecionar os dados
$query = sprintf( "SELECT nome,sobrenome,email,cpfcnpj,cep,usuario,senha FROM usuarios");
// executa a query
$dados = mysqli_query($con,$query);

// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>


