<?php

require '../../config.php';
require '../../classes/Junho.php';

$junho = new Junho($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$junho->editJunhoFotografia($cobertura,$material);

header("Location: ../junho-editar.php");