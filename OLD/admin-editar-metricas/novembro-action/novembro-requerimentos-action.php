<?php

require '../../config.php';
require '../../classes/Novembro.php';

$novembro = new Novembro($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$novembro->editNovembroRequerimentos($requerimentos);

header("Location: ../novembro-editar.php");