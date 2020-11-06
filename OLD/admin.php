<?php
session_start();
require './classes/Usuario.php';
require './config.php';
if(isset($_SESSION['email']) === false) {
    header("location: login.html");
    exit;
}
$user = new Usuario($pdo);

$email = addslashes($_SESSION['email']);
$permissao = $user->getPermissao($email);

$paginacao = $user->paginacao();

$total = $paginacao['c'];
$paginas = ceil(($total/10));

$pg = 1;
if(isset($_GET['p']) && !empty($_GET['p'])) {
    $pg = addslashes($_GET['p']);
}
$p = ($pg - 1) * 10;


$nomePesquisa = filter_input(INPUT_POST, "nomePesquisa", FILTER_SANITIZE_STRIPPED);
$resultadoPesquisa = $user->pesquisarUsuario($nomePesquisa);
$listaUsuarios = $user->selectAll($p);

if($permissao == 0) {
    header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
<?php 
        include 'header.php';
    ?>
</head>
<body>




<?php 

include 'newpainel.php'

?>




<div class="container-fluid  justify-content-center header-pagina">




</div>

        
        <div class="container-adm">
            <div class="container-titulo">
                <h1>Página do Administrador</h1>
                <img src="./assets/img/icone-adm.png" width="50px" alt="Página do admnistrador">
            </div>

            <form method="POST" action="./admin.php">

                <label>Pesquisar:</label>
                <input type="text" name="nomePesquisa" placeholder="Pesquisar">
                <input type="submit" value="Pesquisar">
                <?php  if(isset($nomePesquisa)) {
                        echo "<div class='botao-voltar' ><a href='./admin.php'>Voltar Para Página Principal</a></div>";
                    } 
                ?>
            </form>
            <br>
            <?php 
        
            if($permissao != 0): 
            ?>
            <table class=".table-action">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>

                
                <?php
                    if(isset($nomePesquisa)) :
                    foreach((array)$resultadoPesquisa as $usuario): 
                   
                ?>
                    
                    <tr>
                            
                        <td><?= $usuario['nome']; ?></td>
                        <td><?= $usuario['email']; ?></td>
                        <td><?= $usuario['telefone']; ?></td>
                        <td>
                            <a href="visualizarusuario.php?id=<?= $usuario['id']; ?>">
                                
                                <img src="./assets/img/icone-visualizar.png" class="img-fluid img-ico" alt="visualizar">
                            </a>
                            <?php if($permissao == 1):  ?>   
                                <a href="setar-adm.php?id=<?= $usuario['id']; ?>" target="_blank">
                                    <img src="./assets/img/add-adm.png" class="img-fluid img-ico" >
                                </a>
                                <a href="excluir.php?id=<?= $usuario['id']; ?>" class="<?= $usuario['id']; ?>">
                                    <img src="./assets/img/icone-excluir.png" class="img-fluid img-ico"  alt="excluir">
                                    
                            
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                
                    <?php endif; ?>
                    
                    <?php 
                        
                       if(!isset($nomePesquisa)): 
                        foreach($listaUsuarios as $usuario):
                        
                    ?>
                        <tr>
                            
                            <td>
                                <?php
                                $getPermissao = $user->getPermissao($usuario['email']);
                                if($getPermissao == 1) {
                                    echo "<span class='tag-admin'>".$usuario['nome'].' '.'(Admin)'."</span>";
                                } elseif($getPermissao == 2) {
                                    echo "<span class='tag-moderador'>".$usuario['nome'].' '.'(Moderador)'."</span>";
                                } else {
                                    echo "<span class='tag-usuario'>".$usuario['nome'].' '.'(Usuario)'."</span>";
                                }
                                ?>
                            </td>
                            <td><?= $usuario['email']; ?></td>
                            <td><?= $usuario['telefone']; ?></td>
                            <td>
                                <a href="visualizarusuario.php?id=<?= $usuario['id']; ?>">
                                    
                                    <img src="./assets/img/icone-visualizar.png" width="30px"  alt="visualizar">
                                    
                                </a>
                                <?php  if($permissao == 1):  ?> 
                                    <a href="setar-adm.php?id=<?= $usuario['id']; ?>" >
                                       
                                        <img id="<?= $usuario['id']; ?>" class="setar-adm" src="./assets/img/add-adm.png" width="30px">
                                    </a>
                                    <a href="excluir.php?id=<?= $usuario['id']; ?>" >
                                        <img class="botao-excluir" id="<?= $usuario['id']; ?>" src="./assets/img/icone-excluir.png" width="30px" alt="excluir">
                                        
                    
                                    </a>

                                
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                
            </table>
            
            <?php 
                echo "<div class='paginacao-admin'>";
                for( $i = 0; $i < $paginas; $i++ ) {
                    
                    echo '<a href="./admin.php?p='.($i+1).'">['.($i+1).']</a>';
                          
                }
                echo "</div>";
                endif; 
            ?>
                    
                    
            


<br>
<br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/anual-editar.php?id=<?= $usuario['id']; ?>">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas anuais</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/janeiro-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Janeiro</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/fevereiro-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Fevereiro</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/marco-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Março</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/abril-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Abril</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>




                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/maio-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Maio</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/junho-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Junho</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/julho-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Julho</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/agosto-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Agosto</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/setembro-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Setembro</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/outubro-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Outubro</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/novembro-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Novembro</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <a href="./admin-editar-metricas/dezembro-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Dezembro</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>
                            

     


                
    </div>

<?php

    include 'newpainel-fim.php';

?>


    <div class="modal-container-admin">
                                            <div class="modal-admin">
                                                <div class="close-modal">
                                                    <span class="material-icons">
                                                        close
                                                    </span>
                                                </div>
                                                <div class="modal-content-admin">
                                                    <div class="container-content-admin">
                                                        <p>Clique em confirmar para excluir</p>
                                                            <div class="img-modal-container modal-footer">
                                                                <a class="link-img-modal" href="">
                                                                    <img  src="./assets/img/icon-ok.png" alt="confirmar" width="50px">
                                                                    
                                                                </a>
                                                            </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
    </div>



    
    <div class="modal-container-setar-admin col">
                                            <div class="modal-setar-admin">
                                                <div class="close-modal">
                                                    <span class="material-icons">
                                                        close
                                                    </span>
                                                </div>
                                                <div class="modal-content-setar-admin">
                                                    <div class="container-content-setar-admin">
                                                    <form method="POST" action="setar-adm.php">
    
                                                        <label>Escolha o nível de acesso:</label>
                                                        <input class="hidden-input-setar-admin" name="idUsuario" type="hidden" value="">
                                                        <select name="nivel-acesso form-control">
                                                            <option value="1">Administrador</option>
                                                            <option value="2">Moderador</option>
                                                            <option value="0">Usuário</option>
                                                        </select><br>
                                                        <div class="modal-footer">
                                                            <input type="submit" class="btn" value="Adicionar">
                                                        </div>
                                                    </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
    </div>

<script src="assets/js/modal-admin.js"></script>
<script src="assets/js/modal-setar-admin.js"></script>
</body>
</html>