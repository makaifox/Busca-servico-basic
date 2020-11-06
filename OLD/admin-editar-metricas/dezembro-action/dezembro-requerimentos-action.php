<?php

require '../../config.php';
require '../../classes/Dezembro.php';

$dezembro = new Dezembro($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$dezembro->editDezembroRequerimentos($requerimentos);

header("Location: ../dezembro-editar.php");