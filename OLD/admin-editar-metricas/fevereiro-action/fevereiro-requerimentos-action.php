<?php

require '../../config.php';
require '../../classes/Fevereiro.php';

$fevereiro = new Fevereiro($pdo);

$requerimentos = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_FLOAT);

$fevereiro->editFevereiroRequerimentos($requerimentos);

header("Location: ../fevereiro-editar.php");