<?php
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['usuario'];

require './buscar_action.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Just Virtua</title>
</head>




  <body>

    <div id="root">
        <div id="page-teacher-list" class="container">
            <header class="page-header">
                <div class="top-bar-container">
                    <a href="/home.php"><img src="assets/img/icons/back.svg" alt="Voltar"></a>
                    <img src="/assets/img/logo.png" alt="logo">
                </div>
                <div class="header-content">
                    <strong>Estes são os profissionais disponíveis.</strong>
                    <form id="search-teachers" name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" >
                        <div class="select-block">
                            <label for="servico">Serviço</label>

                            <select id="servico" name="servico">
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
                        </div>
                        <div class="select-block">
                            <label for="week_day">Dia da semana</label>
                            <select id="week_day" name="week_day">
                                <option value="" disabled="" hidden="">Selecione uma opção</option>
                                <option value="0">Domingo</option>
                                <option value="1">Segunda-feira</option>
                                <option value="2">Terça-feira</option>
                                <option value="3">Quarta-feira</option>
                                <option value="4">Quinta-feira</option>
                                <option value="5">Sexta-feira</option>
                                <option value="6">Sábado</option>
                            </select>
                        </div>
                        <div class="input-block">
                            <label for="time">Horário</label>
                            <input type="time" id="time" value=" " name="fromof">
                        </div>
                        <button type="submit"> Buscar</button>
                    </form>
                </div>
            </header>
            <main>

            <?php
// Conexão com o banco de dados
require './config.php';
// Recuperamos a ação enviada pelo formulário
$a = $_GET['a'];
// Verificamos se a ação é de busca
if ($a == "buscar") {
    // Pegamos a palavra
    $servico = trim($_POST['servico']);
    $week_day = trim($_POST['week_day']);
    $time = trim($_POST['fromof']);
    // Verificamos no banco de dados produtos equivalente a palavra digitada
    $sql = mysqli_query($con,"SELECT * FROM servicos WHERE servico LIKE '%".$servico."%' ORDER BY nome");
    // Descobrimos o total de registros encontrados
    $numRegistros = mysqli_num_rows($sql);
    // Se houver pelo menos um registro, exibe-o
    if ($numRegistros != 0) {
        // Exibe os produtos e seus respectivos preços
        while ($prestador = mysqli_fetch_object($sql)) {
            ?>
	
            
                <article class="teacher-item">
                    <header>
                        <img src="uploads/<?=$prestador['foto']?>" alt="<?=$prestador['nome']?>">
                        <div>
                            <strong><?=$prestador['nome']?> <?=$prestador['sobrenome']?></strong>
                            <span><?=$prestador['servico']?></span>
                        </div>
                    </header>
                    <p>Web Designer e Tecnico em T.I. ,Nerdzão desde pequeno, curto mto games, Quadrinhos, animes,livros de ficção cientifica ouvir Hard Rock e Power metal</p>
                    <footer>
                        <p>Preço/hora<strong>R$ <?=$prestador['cost']?></strong></p>
                        <a target="_blank" href="https://wa.me/21993424566">
                            <img src="assets/img/icons/whatsapp.svg" alt="whatsapp">
                            entrar em contato
                        </a>
                    </footer>
                </article>

                <?php
        }
		 } else {
            echo "Nenhum serviço de ".$servico." foi encontrado no momento ";
        }
    }
    ?>
            </main>
        </div>
    </div>

</body>
</html>

<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>
