<?php

require '../../config.php';
require '../../classes/Julho.php';

$julho = new Julho($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$julho->editJulhoFotografia($cobertura,$material);

header("Location: ../julho-editar.php");