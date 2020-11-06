<?php

require '../../config.php';
require '../../classes/Marco.php';

$marco = new Marco($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$marco->editMarcoFotografia($cobertura,$material);

header("Location: ../marco-editar.php");