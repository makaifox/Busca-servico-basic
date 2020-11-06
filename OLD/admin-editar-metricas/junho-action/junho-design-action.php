<?php

require '../../config.php';
require '../../classes/Junho.php';

$junho = new Junho($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$junho->editJunhoDesign($pecas,$impressoes);

header("Location: ../junho-editar.php");