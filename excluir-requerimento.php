<?php

require './config.php';
require './classes/Formulario.php';

$idForm = addslashes($_GET['id']);

$formulario = new Formulario($pdo);
echo "<pre>";
$nomeAnexoDemanda = $formulario->deleteForm($idForm);
var_dump($nomeAnexoDemanda);
unlink ('./arquivos/'.$nomeAnexoDemanda);

header("location: admin.php");