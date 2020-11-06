<?php

require '../../config.php';
require '../../classes/Agosto.php';

$agosto = new Agosto($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$agosto->editAgostoSocial($seguidores, $alcance);

header("Location: ../agosto-editar.php");