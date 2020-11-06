<?php
require './config.php';
require './classes/Formulario.php';

$formulario = new Formulario($pdo);
$id_usuario = filter_input(INPUT_POST, 'id_usuario');
$idForm = filter_input(INPUT_POST, 'idForm');
if($id_usuario) {
    $formulario->editStatus( $idForm);
}

header("location: admin.php");