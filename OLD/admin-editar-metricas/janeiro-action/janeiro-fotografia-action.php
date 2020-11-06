<?php

require '../../config.php';
require '../../classes/Janeiro.php';

$janeiro = new Janeiro($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$janeiro->editJaneiroFotografia($cobertura,$material);

header("Location: ../janeiro-editar.php");