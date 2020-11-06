<?php


$user = new Usuario($pdo);
$email = addslashes($_SESSION['email']);
$arrayUsuario = $user->selectArray($email);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
       <?php 
            include 'header.php';
        ?>


        <title>Painel de usuário</title>
        
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand purple-bar">
        
            <a class="navbar-brand " href="index.php"><img class="img-fluid" src="./assets/img/20170221-Logotipo-PMM-Secretarias-Horizontal-Branco-CCS-285x94.png"  alt="Home" style=" max-width: 140px;"></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Olá, <?php echo $arrayUsuario['nome']; ?>  <i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php">Voltar a pagina inicial</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sair.php">Sair</a>
                    </div>
                </li>
            </ul>
          
        </nav>

<!---------------------------------------------- fim do menu -------------------------------------------------------->
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion purple-bar" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <br>
                            <br>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Voltar a pagina inicial
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Métricas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./admin-editar-metricas/anual-editar.php">Métricas Anuais 2020</a>
                                    <a class="nav-link" href="./admin-editar-metricas/junho-editar.php">Métricas Junho 2020</a>
                                    <a class="nav-link" href="./admin-editar-metricas/maio-editar.php">Métricas Maio 2020</a>
                                    <a class="nav-link" href="./admin-editar-metricas/abril-editar.php">Métricas Abril 2020</a>
                                    <a class="nav-link" href="./admin-editar-metricas/marco-editar.php">Métricas Março 2020</a>
                                    <a class="nav-link" href="./admin-editar-metricas/fevereiro-editar.php">Métricas Fevereiro 2020</a>
                                    <a class="nav-link" href="./admin-editar-metricas/janeiro-editar.php">Métricas Janeiro 2020</a>
                                    <a class="nav-link" href="./admin-editar-metricas/dezembro-editar.php">Métricas Dezembro 2019</a>
                                    <a class="nav-link" href="./admin-editar-metricas/novembro-editar.php">Métricas Novembro 2019</a>
                                    <a class="nav-link" href="./admin-editar-metricas/outubro-editar.php">Métricas Outubro 2019</a>
                                    <a class="nav-link" href="./admin-editar-metricas/setembro-editar.php">Métricas Setembro 2019</a>
                                    <a class="nav-link" href="./admin-editar-metricas/agosto-editar.php">Métricas Agosto 2019</a>
                                    <a class="nav-link" href="./admin-editar-metricas/julho-editar.php">Métricas Julho 2019</a>
    

                                </nav>
                            </div>
                            

                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                           </div>
                    
                </nav>
            </div>
        
            <div id="layoutSidenav_content">
                <!--<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Paineil de Usuário</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Formulário de Requerimentos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Métricas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Gerenciar usuários</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin.php">Clique aqui</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                -->            
            
