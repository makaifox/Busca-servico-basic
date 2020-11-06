<?php

require '../../config.php';
require '../../classes/Marco.php';

$marco = new Marco($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$marco->editMarcoDesign($pecas,$impressoes);

//header("Location: ../marco-editar.php");