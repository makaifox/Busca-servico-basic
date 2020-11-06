<?php

require '../../config.php';
require '../../classes/Setembro.php';

$setembro = new Setembro($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$setembro->editSetembroDesign($pecas,$impressoes);

header("Location: ../setembro-editar.php");