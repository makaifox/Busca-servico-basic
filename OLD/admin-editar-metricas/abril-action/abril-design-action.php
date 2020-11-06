<?php

require '../../config.php';
require '../../classes/Abril.php';

$abril = new Abril($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$abril->editAbrilDesign($pecas,$impressoes);

header("Location: ../abril-editar.php");