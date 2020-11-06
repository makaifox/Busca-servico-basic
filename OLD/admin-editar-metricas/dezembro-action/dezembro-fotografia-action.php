<?php

require '../../config.php';
require '../../classes/Dezembro.php';

$dezembro = new Dezembro($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$dezembro->editDezembroFotografia($cobertura,$material);

header("Location: ../dezembro-editar.php");