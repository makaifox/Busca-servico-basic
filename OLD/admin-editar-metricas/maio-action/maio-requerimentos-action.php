<?php

require '../../config.php';
require '../../classes/Maio.php';

$maio = new Maio($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$maio->editMaioRequerimentos($requerimentos);

header("Location: ../../maio-editar.php");



