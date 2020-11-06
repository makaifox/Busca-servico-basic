<?php

require '../../config.php';
require '../../classes/Outubro.php';

$outubro = new Outubro($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$outubro->editOutubroFotografia($cobertura,$material);
echo $cobertura.' - '.$material;
header("Location: ../outubro-editar.php");