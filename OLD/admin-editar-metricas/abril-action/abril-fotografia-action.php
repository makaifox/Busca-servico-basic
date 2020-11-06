<?php

require '../../config.php';
require '../../classes/Abril.php';

$abril = new Abril($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$abril->editAbrilFotografia($cobertura,$material);

header("Location: ../abril-editar.php");