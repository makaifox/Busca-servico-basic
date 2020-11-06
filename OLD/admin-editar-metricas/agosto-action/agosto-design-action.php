<?php

require '../../config.php';
require '../../classes/Agosto.php';

$agosto = new Agosto($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$agosto->editAgostoDesign($pecas,$impressoes);

header("Location: ../agosto-editar.php");