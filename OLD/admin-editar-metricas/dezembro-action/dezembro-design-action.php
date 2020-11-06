<?php

require '../../config.php';
require '../../classes/Dezembro.php';

$dezembro = new Dezembro($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$dezembro->editDezembroDesign($pecas,$impressoes);

header("Location: ../dezembro-editar.php");