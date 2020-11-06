<?php

require '../../config.php';
require '../../classes/Setembro.php';

$setembro = new Setembro($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$setembro->editSetembroFotografia($cobertura,$material);

header("Location: ../setembro-editar.php");