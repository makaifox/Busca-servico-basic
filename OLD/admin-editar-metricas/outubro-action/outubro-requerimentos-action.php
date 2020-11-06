<?php

require '../../config.php';
require '../../classes/Outubro.php';

$outubro = new Outubro($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$outubro->editOutubroRequerimentos($requerimentos);

header("Location: ../outubro-editar.php");