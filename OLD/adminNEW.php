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
            
            <?php 
        
            if($permissao != 0): 
            ?>
            <table>
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
                                
                                <img src="./assets/img/icone-visualizar.png" width="30px"  alt="visualizar">
                            </a>
                            <?php if($permissao == 1):  ?>   
                                <a href="setar-adm.php?id=<?= $usuario['id']; ?>" target="_blank">
                                    <img src="./assets/img/add-adm.png" width="30px">
                                </a>
                                <a href="excluir.php?id=<?= $usuario['id']; ?>">
                                    <img src="./assets/img/icone-excluir.png" width="30px" alt="excluir">
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





                                    
                                       
                                    <button type="button" class="btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="./assets/img/add-adm.png" width="30px">
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <?php

                                        $email = $_SESSION['email'];
                                        $user = new Usuario($pdo);
                                        if(filter_input(INPUT_POST, 'nivel-acesso')) {
                                            $nivelAcesso = filter_input(INPUT_POST, "nivel-acesso");
                                            $user->setPermissao($idUsuario, $nivelAcesso);
                                            $atualizar = mysql_query("UPDATE usuarios SET nivel-acesso='$nivelAcesso'")or die(mysql_error());
 
                                        }
                                        ?>

                                        <form method="POST">
                                            
                                                <label>Escolha o nível de acesso:</label>
                                                <select name="nivel-acesso">
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Moderador</option>
                                                    <option value="0">Usuário</option>
                                                </select><br>
                                        
                                    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" value="Adicionar" class="btn btn-primary">Alterar</button>


                                        </form>

                                            </div>
                                            </div>
                                        </div>
                                        </div>




















                                        
                                    </a>





















                                    <a href="excluir.php?id=<?= $usuario['id']; ?>">
                                        <img src="./assets/img/icone-excluir.png" width="30px" alt="excluir">
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
                            <a href="./admin-editar-metricas/anual-editar.php">
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
                            <a href="./admin-editar-metricas/Abril20-editar.php">
                                <div class="card purple-bar text-white mb-4">
                                    <div class="card-body">Métricas Abril 2020</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </a>    
                            </div>
                            

                           <!-- Button trigger modal -->

                
    </div>

<?php

    include 'newpainel-fim.php';

?>



<script src="assets/js/modal.js"></script>
</body>
</html>