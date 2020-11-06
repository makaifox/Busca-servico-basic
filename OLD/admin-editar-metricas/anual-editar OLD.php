
<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php

include ('../header.php')


?>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/abas.css">


    <title>Anual</title>
</head>
<body>

<div class="col-xl-12 col-md-12">
                    <div class="card purple-bar  mb-4">
                        <div class="card-body">

                            <div class="row">

                                        <div class="col-xl-6 col-md-6">
                                            <div class="card white-box  mb-4">
                                                <div class="card-body">
                                                
                                                    <form method="POST" action="anual-action/anual-requerimentos-action.php" class="anual-requerimentos">
                                                                    <h3>Requerimetos</h3><br>
                                                                    <div class="row">
                                                                                        
                                                                            <div class="col">

                                                                        
                                                                                <label for="ano" class="font-weight-bold font" >ANO</label><br>
                                                                                <input type="number" name="ano" min="2000" max="2099"><br><br>
                                                                        
                                                                                <label for="semgov" class="font-weight-bold font">SEMGOV</label><br>
                                                                                <input type="number" name="semgov"><br><br>
                                                                        
                                                                                <label for="ano" class="font-weight-bold font">SEMUS</label><br>
                                                                                <input type="number" name="semus"><br><br>

                                                                            </div>
                                                                            <div class="col">

                                                                                <label for="ano" class="font-weight-bold font">SEMAS</label><br>
                                                                                <input type="number" name="semas"><br><br>
                                                                        
                                                                                <label for="ano" class="font-weight-bold font">SEMIMSP</label><br>
                                                                                <input type="number" name="semimsp"><br><br>
                                                                        
                                                                                <label for="ano" class="font-weight-bold font">SEMSOPC</label><br>
                                                                                <input type="number" name="semsopc"><br><br>
                                                                        
                                                                            
                                                                            </div>

                                                                    </div>
                                                    
                                                
                                                                </div>
                                                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                                                                        
                                                                                                                            

                                                                            
                                                                    <input type="submit" value="Editar" class=" btn btn2" >

                                                    </form>            



                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6">
                                            <div class="card white-box mb-4">
                                                <div class="card-body">
                                                
                                                <form method="POST" action="anual-action/anual-demandas-action.php" class="anual-demandas">
                                                                    <h3>Demandas</h3><br>
                                                    <div class="row">
                                                            <div class="col">
                                                                    <label for="ano" class="font-weight-bold font">ANO</label><br>
                                                                    <input type="number" name="ano"  min="2000" max="2099" size="4"><br><br>
                                                            
                                                                    <label for="quantitativo" class="font-weight-bold font">QUANTITATIVO</label><br>
                                                                    <input type="number" name="quantitativo" size="6"><br><br>
                                                            
                                                                    <label for="qualitativo" class="font-weight-bold font">QUALITATIVO</label><br>
                                                                    <input type="number" name="qualitativo" size="6"><br><br>
                                                            
                                                                    <label for="imp1" class="font-weight-bold font">IMP 1º (CONT./CLIP.)</label><br>
                                                                    <input type="number" name="imp1" size="6"><br><br>
                                                            
                                                                    <label for="imp2" class="font-weight-bold font">IMP 2º (CONT./CLIP)</label><br>
                                                                    <input type="number" name="imp2" size="6"><br><br>

                                                                    <label for="dg1" class="font-weight-bold font">DG 1º (PEÇ./IMPR.)</label><br>
                                                                    <input type="number" name="dg1" size="6"><br><br>

                                                            </div>

                                                                
                                                            <div class="col">
                                                            
                                                                    <label for="dg2" class="font-weight-bold font">DG 2º (PEÇ./IMPR.)</label><br>
                                                                    <input type="number" name="dg2" size="6"><br><br>

                                                                    <label for="fav1" class="font-weight-bold font">FAV 1º (COBER./MAT.)</label><br>
                                                                    <input type="number" name="fav1" size="6"><br><br>
                                                                    
                                                                    <label for="fav2" class="font-weight-bold font">FAV 2º (PEÇ./IMPR.)</label><br>
                                                                    <input type="number" name="fav2" size="6"><br><br>

                                                                    <label for="mds1" class="font-weight-bold font">MDS 1º (POSTS./ALC.)</label><br>
                                                                    <input type="number" name="mds1" size="6"><br><br>

                                                                    <label for="mds2" class="font-weight-bold font">MDS 2º (POSTS./ALC.)</label><br>
                                                                    <input type="number" name="mds2" size="6"><br><br>

                                                                    
                                                            
                                                            </div>

                                                    </div>
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





</body>
</html>