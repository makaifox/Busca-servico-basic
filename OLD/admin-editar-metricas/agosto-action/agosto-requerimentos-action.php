<?php

require '../../config.php';
require '../../classes/Agosto.php';

$agosto = new Agosto($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$agosto->editAgostoRequerimentos($requerimentos);

header("Location: ../agosto-editar.php");