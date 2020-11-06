<?php
session_start();
require './config.php';
require './classes/Anual.php';
require './classes/Janeiro.php';
require './classes/Fevereiro.php';
require './classes/Marco.php';
require './classes/Abril.php';
require './classes/Maio.php';
require './classes/Junho.php';
require './classes/Julho.php';
require './classes/Agosto.php';
require './classes/Setembro.php';
require './classes/Outubro.php';
require './classes/Novembro.php';
require './classes/Dezembro.php';
require './classes/Usuario.php';


$anual = new Anual($pdo);
$janeiro = new Janeiro($pdo);
$fevereiro = new Fevereiro($pdo);
$marco = new Marco($pdo);
$abril = new Abril($pdo);
$maio = new Maio($pdo);
$junho = new Junho($pdo);
$julho = new Julho($pdo);
$agosto = new Agosto($pdo);
$setembro = new Setembro($pdo);
$outubro = new Outubro($pdo);
$novembro = new Novembro($pdo);
$dezembro = new Dezembro($pdo);
$user = new Usuario($pdo);
if(isset($_SESSION['email'])) {
    $permissao = $user->getPermissao($_SESSION['email']);
} else {
    $permissao = $user->getPermissao(null);
}

$metricas = [
    "anual" => [
        $anual->selectAnual()
    ],
    "anual2" => [
        $anual->selectAnual2()
    ],
    "janeiro" => [
        "requerimentos" => [ 
            $janeiro->selectJaneiroRequerimentos()
        ],
        "imprensa" => [
            $janeiro->selectJaneiroImprensa()
        ],
        "design" => [
            $janeiro->selectJaneiroDesign()
        ],
        "fotografia" => [
            $janeiro->selectJaneiroFotografia()
        ],
        "social" => [
            $janeiro->selectJaneiroSocial()
        ]
    ],
    "fevereiro" => [
        "requerimentos" => [ 
            $fevereiro->selectFevereiroRequerimentos()
        ],
        "imprensa" => [
            $fevereiro->selectFevereiroImprensa()
        ],
        "design" => [
            $fevereiro->selectFevereiroDesign()
        ],
        "fotografia" => [
            $fevereiro->selectFevereiroFotografia()
        ],
        "social" => [
            $fevereiro->selectFevereiroSocial()
        ]
    ],
    "marco" => [
        "requerimentos" => [ 
            $marco->selectMarcoRequerimentos()
        ],
        "imprensa" => [
            $marco->selectMarcoImprensa()
        ],
        "design" => [
            $marco->selectMarcoDesign()
        ],
        "fotografia" => [
            $marco->selectMarcoFotografia()
        ],
        "social" => [
            $marco->selectMarcoSocial()
        ]
    ],
    "Abril" => [
        "requerimentos" => [ 
            $abril->selectAbrilRequerimentos()
        ],
        "imprensa" => [
            $abril->selectAbrilImprensa()
        ],
        "design" => [
            $abril->selectAbrilDesign()
        ],
        "fotografia" => [
            $abril->selectAbrilFotografia()
        ],
        "social" => [
            $abril->selectAbrilSocial()
        ]
    ],
    "maio" => [
        "requerimentos" => [ 
            $maio->selectMaioRequerimentos()
        ],
        "imprensa" => [
            $maio->selectMaioImprensa()
        ],
        "design" => [
            $maio->selectMaioDesign()
        ],
        "fotografia" => [
            $maio->selectMaioFotografia()
        ],
        "social" => [
            $maio->selectMaioSocial()
        ]
    ],    
    "junho" => [
        "requerimentos" => [ 
            $junho->selectJunhoRequerimentos()
        ],
        "imprensa" => [
            $junho->selectJunhoImprensa()
        ],
        "design" => [
            $junho->selectJunhoDesign()
        ],
        "fotografia" => [
            $junho->selectJunhoFotografia()
        ],
        "social" => [
            $junho->selectJunhoSocial()
        ]
    ],
    "julho" => [
        "requerimentos" => [ 
            $julho->selectJulhoRequerimentos()
        ],
        "imprensa" => [
            $julho->selectJulhoImprensa()
        ],
        "design" => [
            $julho->selectJulhoDesign()
        ],
        "fotografia" => [
            $julho->selectJulhoFotografia()
        ],
        "social" => [
            $julho->selectJulhoSocial()
        ]
    ],
    "agosto" => [
        "requerimentos" => [ 
            $agosto->selectAgostoRequerimentos()
        ],
        "imprensa" => [
            $agosto->selectAgostoImprensa()
        ],
        "design" => [
            $agosto->selectAgostoDesign()
        ],
        "fotografia" => [
            $agosto->selectAgostoFotografia()
        ],
        "social" => [
            $agosto->selectAgostoSocial()
        ]
    ],
    "setembro" => [
            "requerimentos" => [ 
                $setembro->selectSetembroRequerimentos()
            ],
            "imprensa" => [
                $setembro->selectSetembroImprensa()
            ],
            "design" => [
                $setembro->selectSetembroDesign()
            ],
            "fotografia" => [
                $setembro->selectSetembroFotografia()
            ],
            "social" => [
                $setembro->selectSetembroSocial()
            ]
        ], 
        "outubro" => [
            "requerimentos" => [ 
                $outubro->selectOutubroRequerimentos()
            ],
            "imprensa" => [
                $outubro->selectOutubroImprensa()
            ],
            "design" => [
                $outubro->selectOutubroDesign()
            ],
            "fotografia" => [
                $outubro->selectOutubroFotografia()
            ],
            "social" => [
                $outubro->selectOutubroSocial()
            ]
        ],
        "novembro" => [
            "requerimentos" => [ 
                $novembro->selectNovembroRequerimentos()
            ],
            "imprensa" => [
                $novembro->selectNovembroImprensa()
            ],
            "design" => [
                $novembro->selectNovembroDesign()
            ],
            "fotografia" => [
                $novembro->selectNovembroFotografia()
            ],
            "social" => [
                $novembro->selectNovembroSocial()
            ]
        ],
        "dezembro" => [
            "requerimentos" => [ 
                $dezembro->selectDezembroRequerimentos()
            ],
            "imprensa" => [
                $dezembro->selectDezembroImprensa()
            ],
            "design" => [
                $dezembro->selectDezembroDesign()
            ],
            "fotografia" => [
                $dezembro->selectDezembroFotografia()
            ],
            "social" => [
                $dezembro->selectDezembroSocial()
            ]
        ] 
];

$json = json_encode($metricas, JSON_NUMERIC_CHECK, JSON_PRETTY_PRINT);
$fp = fopen('./arquivo.json', 'w' );
fwrite($fp, $json);
fclose($fp);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php

require "header.php";

?>

<title>métricas</title>
</head>

<body>

<!---------------------------------------------- banner com paralax  ----------------------------------------------->

<?php 

    include 'banner.php';
    include 'menuIndex.php';

?>

<br/>
<br/>
<br/>
    
<div class="container-lg " > 
    <div class="row" >
<!--------------------------------------------------ESPAÇO ESQUERDA ------------------------------------------------------>
        <div class="col"> </div>
                  
<!----------------------------------------------------DIV CENTRAL -------------------------------------------------------->
        <div class="col-lg-6 border " id="linha">
       
<!-----------------------------------------------importando métricas------------------------------------------------------>
<ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item aba">
                <a class="nav-link active aba" id="home-tab" data-toggle="tab" href="#2020" role="tab" aria-controls="home" aria-selected="true">ANO/2020</a> 
                </li>
                
                <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#JUNHO/2020" role="tab" aria-controls="profile" aria-selected="false">JUNHO/2020</a>
                </li>


                <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#MAIO/2020" role="tab" aria-controls="profile" aria-selected="false">MAIO/2020</a>
                </li>


            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ABRIL/2020" role="tab" aria-controls="profile" aria-selected="false">ABRIL/2020</a>
                </li>



            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#MARCO/2020" role="tab" aria-controls="profile" aria-selected="false">MARÇO/2020</a>
                </li>



            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#FEVEREIRO/2020" role="tab" aria-controls="profile" aria-selected="false">FEVEREIRO/2020</a>
                </li>



            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#JANEIRO/2020" role="tab" aria-controls="profile" aria-selected="false">JANEIRO/2020</a>
                </li>



            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#DEZEMBRO/2019" role="tab" aria-controls="profile" aria-selected="false">DEZEMBRO/2019</a>
                </li>


            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#NOVEMBRO/2019" role="tab" aria-controls="profile" aria-selected="false">NOVEMBRO/2019</a>
                </li>



            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#OUTUBRO/2019" role="tab" aria-controls="profile" aria-selected="false">OUTUBRO/2019</a>
                </li>



            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#SETEMBRO/2019" role="tab" aria-controls="profile" aria-selected="false">SETEMBRO/2019</a>
                </li>



            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#AGOSTO/2019" role="tab" aria-controls="profile" aria-selected="false">AGOSTO/2019</a>
                </li>



            <li class="nav-item aba">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#JULHO/2019" role="tab" aria-controls="profile" aria-selected="false">JULHO/2019</a>
                </li>

            </ul>


 <!--------------------------------------------------ABA ANUAL 2020------------------------------------------------------->     
            <div class="tab-content " id="myTabContent">
                <div class="tab-pane fade show active" id="2020" role="tabpanel" aria-labelledby="home-tab">
                    <br/>
                    <br/>
                    <p class="h5">REQUERIMENTOS</p>
                    <div class="border col embed-responsive embed-responsive-4by3 " >
                        
                        <div id="grafico_REQAN-2020"class=" embed-responsive-item" ></div><!-- grafico Requerimentos Anual -->
                    </div> 
                    <br/>
                    <br/>
                    <div class="border col embed-responsive embed-responsive-4by3 ">
                        <p class="h5">DEMANDAS</p>
                        <div id="grafico_DEMANDA-2020" class=" embed-responsive-item"></div><!-- grafico Demanda Anual -->
                        <p class="legDemanda">*As demandas qualitativas referente a área de MDS ultrapassam os valores de 600.000 (Seiscentos Mil).</p>
                    </div>
                    <br/>
                    <br/>
                </div>
 
 <!------------------------------------------------------ABA JUNHO--------------------------------------------------------->
            <div class="tab-pane fade" id="JUNHO/2020" role="tabpanel" aria-labelledby="profile-tab">
                        <br/>
                        <br/>
                        <p class="h5">REQUERIMENTOS</p>
                        <div class="border col embed-responsive embed-responsive-4by3 ">
                            
                            <div id="grafico_REQ-JUN20" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
                        </div>
                        <br/>
                        <br/>
                        <p class="h5">IMPRENSA</p>  
                        <div class="border col embed-responsive embed-responsive-4by3 ">
                            
                            <div id="grafico_I-JUN20" class=" embed-responsive-item" ></div><!-- grafico imprensa  -->
                        </div>
                        <br/>
                        <br/>
                        <p class="h5">DESIGN GRÁFICO</p>  
                        <div class="border col embed-responsive embed-responsive-4by3 "> 
                              
                            <div id="grafico_DG-JUN20" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
                        </div> 
                        <br/>
                        <br/>
                        <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
                        <div class="border col embed-responsive embed-responsive-4by3 "> 
                                 
                            <div id="grafico_FA-JUN20" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
                        </div>  
                        <br/>
                        <br/>
                        <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
                        <div class="border col embed-responsive embed-responsive-4by3 ">
                              
                            <div id="grafico_MS-JUN20" class=" embed-responsive-item"></div><!-- grafico midia social  -->
                        </div>
                        <br/>
                        <br/> 
                </div>
 
 
 <!------------------------------------------------------ABA MAIO--------------------------------------------------------->
                <div class="tab-pane fade" id="MAIO/2020" role="tabpanel" aria-labelledby="profile-tab">
                        <br/>
                        <br/>
                        <p class="h5">REQUERIMENTOS</p>
                        <div class="border col embed-responsive embed-responsive-4by3 ">
                            
                            <div id="grafico_REQ-MAI20" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
                        </div>
                        <br/>
                        <br/>
                        <p class="h5">IMPRENSA</p>  
                        <div class="border col embed-responsive embed-responsive-4by3 ">
                            
                            <div id="grafico_I-MAI20" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
                        </div>
                        <br/>
                        <br/>
                        <p class="h5">DESIGN GRÁFICO</p>  
                        <div class="border col embed-responsive embed-responsive-4by3 "> 
                              
                            <div id="grafico_DG-MAI20" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
                        </div> 
                        <br/>
                        <br/>
                        <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
                        <div class="border col embed-responsive embed-responsive-4by3 "> 
                                 
                            <div id="grafico_FA-MAI20" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
                        </div>  
                        <br/>
                        <br/>
                        <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
                        <div class="border col embed-responsive embed-responsive-4by3 ">
                              
                            <div id="grafico_MS-MAI20" class=" embed-responsive-item"></div><!-- grafico midia social  -->
                        </div>
                        <br/>
                        <br/> 
                </div>
<!------------------------------------------------------ABA ABRIL 2020--------------------------------------------------------->
<div class="tab-pane fade" id="ABRIL/2020" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_REQ-ABR20" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_I-ABR20" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3 "> 
          
        <div id="grafico_DG-ABR20" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-ABR20" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-ABR20" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA MARÇO 2020--------------------------------------------------------->
<div class="tab-pane fade" id="MARCO/2020" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_REQ-MAR20" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_I-MAR20" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3 "> 
          
        <div id="grafico_DG-MAR20" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-MAR20" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-MAR20" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA FEVEREIRO 2020--------------------------------------------------------->
<div class="tab-pane fade" id="FEVEREIRO/2020" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_REQ-FEV20" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_I-FEV20" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3 "> 
          
        <div id="grafico_DG-FEV20" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-FEV20" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-FEV20" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA JANEIRO 2020--------------------------------------------------------->
<div class="tab-pane fade" id="JANEIRO/2020" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_REQ-JAN20" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_I-JAN20" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3 "> 
          
        <div id="grafico_DG-JAN20" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-JAN20" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-JAN20" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA DEZEMBRO 2019--------------------------------------------------------->
<div class="tab-pane fade" id="DEZEMBRO/2019" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_REQ-DEZ19" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_I-DEZ19" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3 "> 
          
        <div id="grafico_DG-DEZ19" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-DEZ19" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-DEZ19" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA NOVEMBRO 2019--------------------------------------------------------->
<div class="tab-pane fade" id="NOVEMBRO/2019" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_REQ-NOV19" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_I-NOV19" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3 "> 
          
        <div id="grafico_DG-NOV19" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-NOV19" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-NOV19" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA OUTUBRO 2019--------------------------------------------------------->
<div class="tab-pane fade" id="OUTUBRO/2019" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_REQ-OUT19" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_I-OUT19" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3 "> 
          
        <div id="grafico_DG-OUT19" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-OUT19" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-OUT19" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA SETEMBRO 2019--------------------------------------------------------->
<div class="tab-pane fade" id="SETEMBRO/2019" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_REQ-SET19" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
        
        <div id="grafico_I-SET19" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3 "> 
          
        <div id="grafico_DG-SET19" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-SET19" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-SET19" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA AGOSTO 2019--------------------------------------------------------->
<div class="tab-pane fade" id="AGOSTO/2019" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3">
        
        <div id="grafico_REQ-AGO19" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3">
        
        <div id="grafico_I-AGO19" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3"> 
          
        <div id="grafico_DG-AGO19" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3"> 
             
        <div id="grafico_FA-AGO19" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3">
          
        <div id="grafico_MS-AGO19" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!------------------------------------------------------ABA JULHO 2019--------------------------------------------------------->
<div class="tab-pane fade" id="JULHO/2019" role="tabpanel" aria-labelledby="profile-tab">
    <br/>
    <br/>
    <p class="h5">REQUERIMENTOS</p>
    <div class="border col embed-responsive embed-responsive-4by3">
        
        <div id="grafico_REQ-JUL19" class=" embed-responsive-item"></div><!-- grafico Requerimentos  -->
    </div>
    <br/>
    <br/>
    <p class="h5">IMPRENSA</p>  
    <div class="border col embed-responsive embed-responsive-4by3">
        
        <div id="grafico_I-JUL19" class=" embed-responsive-item"></div><!-- grafico imprensa  -->
    </div>
    <br/>
    <br/>
    <p class="h5">DESIGN GRÁFICO</p>  
    <div class="border col embed-responsive embed-responsive-4by3"> 
          
        <div id="grafico_DG-JUL19" class=" embed-responsive-item"></div><!-- grafico design gráfico  -->
    </div> 
    <br/>
    <br/>
    <p class="h5">FOTOGRAFIA E AUDIOVISUAL</p> 
    <div class="border col embed-responsive embed-responsive-4by3 "> 
             
        <div id="grafico_FA-JUL19" class=" embed-responsive-item"></div><!-- grafico fotografia e Audiovisual  -->
    </div>  
    <br/>
    <br/>
    <p class="h5">MÍDIA SOCIAL (*FACEBOOK)</p>  
    <div class="border col embed-responsive embed-responsive-4by3 ">
          
        <div id="grafico_MS-JUL19" class=" embed-responsive-item"></div><!-- grafico midia social  -->
    </div>
    <br/>
    <br/> 
</div>
<!----------------------------------------------------===FINAL ABAS -------========----------------------------------->
</div>

</div>

<!----------------------------------------------------===ESPAÇO DIREITA -------========----------------------------------->
        <div class="col"></div>

</div>
</div>



        </div>
<!----------------------------------------------------===ESPAÇO DIREITA -------========----------------------------------->
        <div class="col"></div>


</div>
</div>





<!----------------------------------------------------===rodape -------========----------------------------------->
<br/>
<br/>
<br/>


<?php 
    include 'footer.php'
?>

 
</body>
</html>

