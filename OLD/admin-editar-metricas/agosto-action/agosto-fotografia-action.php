<?php

require '../../config.php';
require '../../classes/Agosto.php';

$agosto = new Agosto($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$agosto->editAgostoFotografia($cobertura,$material);

header("Location: ../agosto-editar.php");