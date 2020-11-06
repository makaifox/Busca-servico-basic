<?php

require '../../config.php';
require '../../classes/Maio.php';

$maio = new Maio($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$maio->editMaioDesign($pecas,$impressoes);

header("Location: ../maio-editar.php");