<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de busca interna com PHP/MySQLi</title>
</head>
<body>
<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" >
        <select id="servico" name="servico" required>
                                    <option value="" disabled="" hidden="">Selecione uma opção</option>
                                    <option value="Advogado">Advogado</option>
                                    <option value="Artesão">Artesão</option>
                                    <option value="Coaching">Coaching</option>
                                    <option value="Consultor">Consultor</option>
                                    <option value="Contador">Contador</option>
                                    <option value="Desenvolvedor">Desenvolvedor</option>
                                    <option value="Designer gráfico">Designer gráfico</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Editor de vídeos">Editor de vídeos</option>
                                    <option value="Escritor">Escritor</option>
                                    <option value="Jornalista">Jornalista</option>
                                    <option value="Nutricionista">Nutricionista</option>
                                    <option value="Personal stylist">Personal stylist</option>
                                    <option value="Professor Particular">Professor Particular</option>
                                    <option value="Promoter">Promoter</option>
                                    <option value="Revisor">Revisor</option>
                                    <option value="técnico de TI">técnico de TI</option>
                                    <option value="Tradutor">Tradutor</option>
                                </select>
    <input type="submit" value="Buscar" />
</form>
<?php
// Conexão com o banco de dados
require './config.php';
// Recuperamos a ação enviada pelo formulário
$a = $_GET['a'];
// Verificamos se a ação é de busca
if ($a == "buscar") {
    // Pegamos a palavra
    $servico = trim($_POST['servico']);
 
    // Verificamos no banco de dados produtos equivalente a palavra digitada
    $sql = mysqli_query($con,"SELECT * FROM servicos WHERE servico LIKE '%".$servico."%' ORDER BY nome");
    // Descobrimos o total de registros encontrados
    $numRegistros = mysqli_num_rows($sql);
    // Se houver pelo menos um registro, exibe-o
    if ($numRegistros != 0) {
        // Exibe os produtos e seus respectivos preços
        while ($produto = mysqli_fetch_object($sql)) {
            echo $produto->nome . $produto->servico. " (R$ ".$produto->cost.") <br />";
        }
    // Se não houver registros
    } else {
        echo "Nenhum serviço de ".$servico." foi encontrado no momento ";
    }
}
?>
</body>
</html>