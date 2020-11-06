<?php

require '../../config.php';
require '../../classes/Julho.php';

$julho = new Julho($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$julho->editJulhoRequerimentos($requerimentos);

header("Location: ../julho-editar.php");