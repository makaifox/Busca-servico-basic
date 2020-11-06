<?php

require '../../config.php';
require '../../classes/Maio.php';

$maio = new Maio($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$maio->editMaioFotografia($cobertura,$material);

header("Location: ../maio-editar.php");