<?php

require '../../config.php';
require '../../classes/Janeiro.php';

$janeiro = new Janeiro($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$janeiro->editJaneiroRequerimentos($requerimentos);

header("Location: ../janeiro-editar.php");