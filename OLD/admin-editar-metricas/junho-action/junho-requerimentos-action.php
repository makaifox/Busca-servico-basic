<?php

require '../../config.php';
require '../../classes/Junho.php';

$junho = new Junho($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$junho->editJunhoRequerimentos($requerimentos);

header("Location: ../junho-editar.php");