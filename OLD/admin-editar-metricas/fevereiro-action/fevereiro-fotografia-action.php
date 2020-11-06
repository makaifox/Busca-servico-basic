<?php

require '../../config.php';
require '../../classes/Fevereiro.php';

$fevereiro = new Fevereiro($pdo);

$cobertura = filter_input(INPUT_POST, 'cobertura');
$material = filter_input(INPUT_POST, 'material');

$fevereiro->editFevereiroFotografia($cobertura,$material);

header("Location: ../fevereiro-editar.php");