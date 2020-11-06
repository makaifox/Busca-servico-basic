<?php

require '../../config.php';
require '../../classes/Outubro.php';

$outubro = new Outubro($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$outubro->editOutubroDesign($pecas,$impressoes);

header("Location: ../outubro-editar.php");