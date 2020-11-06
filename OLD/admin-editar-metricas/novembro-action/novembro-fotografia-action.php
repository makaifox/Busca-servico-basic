<?php

require '../../config.php';
require '../../classes/Novembro.php';

$novembro = new Novembro($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$novembro->editNovembroFotografia($cobertura,$material);

header("Location: ../novembro-editar.php");