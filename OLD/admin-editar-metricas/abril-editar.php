
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
<?php 
        require 'header.php';
    ?>
</head>
<body>


<header class="header-pagina-usuario">

<ul>

<li>
<a href="../index.php"><img src="./assets/img/20170221-Logotipo-PMM-Secretarias-Horizontal-Branco-CCS-285x94.png"  alt="Home" style=" max-width: 120px;"></a>
    
</li>
    <li>
        <a href="../index.php">Voltar a pagina inicial</a>
    </li>
        
    <li>
        <a href="../sair.php">Sair</a><br>
    </li>
</ul>
        
    </header>
<div class="container-fluid  justify-content-center header-pagina">




</div>

        
        <div class="container-adm">
            <div class="container-titulo">
                <h1>Editar Métricas de Abril</h1>
            </div>

            


<br>
<br>


<div class="col-xl-12 col-md-12">
    <div class="card purple-bar  mb-4">
        <div class="card-body">
            <div class="row">

                <div class="col-xl-12 col-md-12">
                    <div class="card white-box  mb-4">
                        <div class="card-body">
                                                    
                            <form method="POST" action="abril-action/abril-requerimentos-action.php" class="abril-requerimentos">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h3>Requerimetos</h3>            
                                </div>                                    
                                        <div class="row">
                                                                        

                                            <div class="col">

                                                                            
                                                <label for="semgov">SEMGOV</label><br>
                                                    <input type="number" name="semgov"><br><br>

                                                <label for="semus">SEMUS</label><br>
                                                    <input type="number" name="semus"><br><br>

                                                <label for="semas">SEMAS</label><br>
                                                    <input type="number" name="semas"><br><br>

                                                <label for="semed">SEMED</label><br>
                                                    <input type="number" name="semed"><br><br>
                                                
                                            </div>
                                            <div class="col">

                                                <label for="semsopc">SEMSOPC</label><br>
                                                    <input type="number" name="semsopc"><br><br>

                                                <label for="setrade">SETRADE</label><br>
                                                    <input type="number" name="setrade"><br><br>

                                                <label for="gabineteDoPrefeito">GABINETE DO PREFEITO</label><br>
                                                    <input type="number" name="gabineteDoPrefeito"><br><br>


                                            </div>

                                            <div class="col">

                                                                                
                                                <label for="procon">PROCON</label><br>
                                                    <input type="number" name="procon"><br><br>

                                                <label for="forum">FÓRUM</label><br>
                                                    <input type="number" name="forum"><br><br>

                                                <label for="semcelt">SEMCELT</label><br>
                                                    <input type="number" name="semcelt"><br><br>

                                            </div>

                                            <div class="col">

                                                <label for="semef">SEMEF</label><br>
                                                    <input type="number" name="semef"><br><br>

                                                <label for="semmurb">SEMMURB</label><br>
                                                    <input type="number" name="semmurb"><br><br>

                                                <label for="defesaCivil">DEFESA CIVIL</label><br>
                                                    <input type="number" name="defesaCivil"><br><br>
                                                                                
                                            </div>

                                        </div>
                                                        
                                                    
                                                                
                                                            <div class="card-footer d-flex align-items-center justify-content-between">
     
                                                                <input type="submit" value="Editar" class=" btn btn2" >
                                                                        
                                                            </div>

                            </form>            

                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-xl-3 col-md-3">
                    <div class="card white-box  mb-4">
                        <div class="card-body">                           

                            <form method="POST" action="abril-action/abril-imprensa-action.php" class="abril-demandas">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h4>Imprensa</h4>           
                                </div>                
                                                                  
                                    <label for="conteudos">CONTEUDOS</label><br>
                                        <input type="number" name="conteudos"><br><br>

                                    <label for="clippings">CLIPPINGS</label><br>
                                        <input type="number" name="clippings"><br><br>
                                                            
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                                                    
                                        <input type="submit" value="Editar" class="btn btn2">                                                    
                                </div>  
                            </form>


                        </div>
                    </div>
                </div>
                                                                    
                <div class="col-xl-3 col-md-3">
                    <div class="card white-box  mb-4">
                        <div class="card-body">

                            <form method="POST" action="abril-action/abril-design-action.php" class="abril-demandas">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h4>Design Gráfico</h4>           
                                </div>                                                       

                                    <label for="pecas">PEÇAS</label><br>
                                        <input type="number" name="pecas"><br><br>

                                    <label for="impressoes">IMPRESSÕES</label><br>
                                        <input type="number" name="impressoes"><br><br>

                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                                            
                                    <input type="submit" value="Editar" class="btn btn2"> 

                                </div>
                                                                                    

                                                                                    
                                                                         
                            </form>

                                                            
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-3">
                    <div class="card white-box  mb-4">
                        <div class="card-body">

                            <form method="POST" action="abril-action/abril-fotografia-action.php" class="abril-demandas">
                                <div class="card-header d-flex align-items-center justify-content-between">                                    
                                    <h4>Fotografia e Audiovisual</h4><br>
                                </div>

                                    <label for="cobertura">COBERTURA</label><br>
                                        <input type="number" name="cobertura"><br><br>

                                    <label for="material">MATERIAL</label><br>
                                        <input type="number" name="material"><br><br>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <input type="submit" value="Editar" class="btn btn2"> 
                                    </div>
                                                                                    

                                                                                    
                                                                       
                            </form>

                        </div>
                    </div>
                </div>
                                
                <div class="col-xl-3 col-md-3">
                    <div class="card white-box  mb-4">
                        <div class="card-body">

                            <form method="POST" action="abril-action/abril-social-action.php" class="abril-demandas">
                                <div class="card-header d-flex align-items-center justify-content-between">                                    
                                    <h4>Midia Social</h4><br>
                                </div>                                                   

                                    <label for="midiaSocial">SEGUIDORES</label><br>
                                        <input type="number" name="seguidores"><br><br>

                                    <label for="alcance">ALCANCE</label><br>
                                        <input type="number" name="alcance"><br><br>

                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                                        
                                        <input type="submit" value="Editar" class="btn btn2"> 

                                </div>
                                                                                                                         
                                                                  
                            </form>

                        </div>
                    </div>  
                </div>

            </div>
        </div>                                    
    </div>
</div>







<script src="assets/js/modal.js"></script>
</body>
</html>