<?php

session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['usuario'];
$id = $_SESSION['id'];

require './buscar_action.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script>
	  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  </script>
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
                            <label for="servico">Qual o Serviço?</label>

                            <select id="servico" name="servico">
                                <option value="" >Selecione uma opção</option>

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
                  
                        <button type="submit"> Buscar</button>
                    </form>
                </div>
            </header>
            <main>

            <?php
// Conexão com o banco de dados
require './config.php';
// Recuperamos a ação enviada pelo formulário


$star = 1;
$a = $_GET['a'];
// Verificamos se a ação é de busca
if ($a == "buscar") {
    // Pegamos a palavra
    $servico = trim($_POST['servico']);

    // Verificamos no banco de dados produtos equivalente a palavra digitada
    $sql = mysqli_query($con,"SELECT * FROM servicos WHERE servico LIKE '%".$servico."%'  ORDER BY nome");
    // Descobrimos o total de registros encontrados
    $numRegistros = mysqli_num_rows($sql);
    // Se houver pelo menos um registro, exibe-o
    if ($numRegistros != 0) {
        // Exibe os produtos e seus respectivos preços
        while ($prestador = mysqli_fetch_object($sql)) {
            
    
    
            $idFoto = $prestador->idfoto;  
            $profissaoPhoto = $prestador->servico; 

            $queryGetStar = "SELECT * FROM avaliacos WHERE  iduser = $idFoto  AND servico = '$profissaoPhoto'";
            $resultStar = mysqli_query($con,$queryGetStar) or die(mysqli_error($con));

    
    
            while ($registroStar = mysqli_fetch_array($resultStar))
 {
                    $qntEstrela = $registroStar['qnt_estrela'];
                     if ($qntEstrela === " ") {
                            $qntEstrela = 0;
                     }
                    $check0 ="disabled";
                    $check1 ="disabled";
                    $check2 ="disabled";
                    $check3 ="disabled";
                    $check4 ="disabled";
                    $check5 ="disabled";
 
                       
                            switch ($qntEstrela) {
                                case 0:
                                         $check0 = "checked";
                                        break;
                                case 1:
                                        $check1 = "checked";
                                        break;
                                case 2:
                                        $check2 = "checked";
                                        break;
                                case 3:
                                        $check3 = "checked";
                                        break;
                                case 4:
                                        $check4 = "checked";
                                        break;
                                case 5:
                                        $check5 = "checked";
                                        break;
                            }
                            
                        }

            ?>
            
                <article class="teacher-item">
                    <header>
                        <img src="uploads/<?php echo $prestador->foto; ?>" alt="<?php echo $prestador->nome; ?>">
                        <div>
                            <strong><?php echo $prestador->servico; ?><br>
                           

                            
                            <div class="estrelas">
                                <input type="radio" id="vazio_<?php echo $star ?>" name="estrela_<?php echo $star ?>" value="" <?php echo $check0 ?>>
                                
                                <label for="estrela_um_<?php echo $star ?>"><i class="fa"></i></label>
                                <input type="radio" id="estrela_um_<?php echo $star ?>" name="estrela_<?php echo $star ?>" value="1" <?php echo $check1 ?>>
                                
                                <label for="estrela_dois_<?php echo $star ?>"><i class="fa"></i></label>
                                <input type="radio" id="estrela_dois_<?php echo $star ?>" name="estrela_<?php echo $star ?>" value="2" <?php echo $check2 ?>>
                                
                                <label for="estrela_tres_<?php echo $star ?>"><i class="fa"></i></label>
                                <input type="radio" id="estrela_tres_<?php echo $star ?>" name="estrela_<?php echo $star ?>" value="3" <?php echo $check3 ?>>
                                
                                <label for="estrela_quatro_<?php echo $star ?>"><i class="fa"></i></label>
                                <input type="radio" id="estrela_quatro_<?php echo $star ?>" name="estrela_<?php echo $star ?>" value="4" <?php echo $check4 ?>>
                                
                                <label for="estrela_cinco_<?php echo $star ?>"><i class="fa"></i></label>
                                <input type="radio" id="estrela_cinco_<?php echo $star ?>" name="estrela_<?php echo $star ?>" value="5" <?php echo $check5 ?>><br><br>
                                
                                
                                
                            </div>
                            
                                </strong> 
                        </div>
                    </header>
                    <p>Disponibilidade</p>
                    <div class="row row-cards d-flex justify-content-center">
                    
                        <div class="col-2 col-card">
                            <div class="card card-date" >
                            
                                <div class="card-body">
                                    <div class="col">
                                    <h5 class="card-title">Dia</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->week_day; ?></h6>
                                    </div>
                                    <div class="col">
                                    <h5 class="card-title">Horário</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->fromof; ?>h - <?php echo $prestador->toof; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 col-card">
                            <div class="card card-date" >
                            
                                <div class="card-body">
                                    <div class="col">
                                    <h5 class="card-title">Dia</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->week_day1; ?></h6>
                                    </div>
                                    <div class="col">
                                    <h5 class="card-title">Horário</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->fromof1; ?>h - <?php echo $prestador->toof1; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 col-card">
                            <div class="card card-date" >
                            
                                <div class="card-body">
                                    <div class="col">
                                    <h5 class="card-title">Dia</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->week_day2; ?></h6>
                                    </div>
                                    <div class="col">
                                    <h5 class="card-title">Horário</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->fromof2; ?>h - <?php echo $prestador->toof2; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 col-card">
                            <div class="card card-date" >
                            
                                <div class="card-body">
                                    <div class="col">
                                    <h5 class="card-title">Dia</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->week_day3; ?></h6>
                                    </div>
                                    <div class="col">
                                    <h5 class="card-title">Horário</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->fromof3; ?>h - <?php echo $prestador->toof3; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 col-card">
                            <div class="card card-date" >

                                <div class="card-body">
                                    <div class="col">
                                    <h5 class="card-title">Dia</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->week_day4; ?></h6>
                                    </div>
                                    <div class="col">
                                    <h5 class="card-title">Horário</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->fromof4; ?>h - <?php echo $prestador->toof4; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 col-card">
                            <div class="card card-date"   >
                                <div class="card-body">
                                    <div class="col">
                                    <h5 class="card-title">Dia</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->week_day5; ?></h6>
                                    </div>
                                    <div class="col">
                                    <h5 class="card-title">Horário</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->fromof5; ?>h - <?php echo $prestador->toof5; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 col-card">
                            <div class="card card-date" >
                                <div class="card-body">
                                    <div class="col">
                                    <h5 class="card-title">Dia</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->week_day6; ?></h6>
                                    </div>
                                    <div class="col">
                                    <h5 class="card-title">Horário</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $prestador->fromof6; ?>h - <?php echo $prestador->fromof6; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                        <p>Imagens</p>
                    <br>
                    <div class="row row-cards d-flex justify-content-center">

                        
                        <!-- Modal -->
                        
                        
                        <?php
                            // fetch Images
                           
                            
                            $i = 1;
                            include "config.php";
                            $queryGetImg = "SELECT * FROM Images WHERE  servico = '$profissaoPhoto'  AND id = $idFoto";
                            $resultImg = $con->query($queryGetImg);

                            if ($resultImg->num_rows > 0 ){
                            while ($row = $resultImg->fetch_object()){ ?>
                                     <a href="#" type="button" class="" data-toggle="modal" data-target="#exampleModal<?php echo $i?>">
                                        <img class="releases" src="<?php echo 'uploads/'.$row->imgName;?>"/>
                                    </a>
                                    
                                    <div class="modal fade" id="exampleModal<?php echo $i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                    <img class="releaseModal" src="<?php echo 'uploads/'.$row->imgName;?>"/>


                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                <?php $i++;
                                    $star++;
                            }
                            }
                        ?>
                        
                    </div>
                    <footer>
                        <div class="row">
                            <div class="col d-flex justify-content-start">
                                <p>Custo da consulta/hora<strong><br>R$ <?php  echo $prestador->cost; ?></strong></p>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <p class="text-right">pagamento por<strong><br><?php  echo $prestador->pagamento; ?> <?php  echo $prestador->pagamento1; ?> <?php  echo $prestador->pagamento2; ?></strong></p>
                            </div>
                        </div>
                    <br>
                        <div class="row d-flex justify-content-center">
                            <a  href="#" type="button"  data-toggle="modal" data-target="#exampleModal<?php echo $prestador->id;?>">
                                Contratar esse serviço
                            </a>
                        </div>

                        <div class="modal fade2" id="exampleModal<?php echo $prestador->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                            <strong><?php echo $prestador->nome; ?><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                       
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


