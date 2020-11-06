<?php

require '../../config.php';
require '../../classes/Setembro.php';

$setembro = new Setembro($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$setembro->editSetembroRequerimentos($requerimentos);

header("Location: ../setembro-editar.php");