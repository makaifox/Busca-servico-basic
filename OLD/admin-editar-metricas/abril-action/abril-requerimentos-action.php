<?php

require '../../config.php';
require '../../classes/Abril.php';

$janeiro = new Abril($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$janeiro->editAbrilRequerimentos($requerimentos);

header("Location: ../abril-editar.php");


