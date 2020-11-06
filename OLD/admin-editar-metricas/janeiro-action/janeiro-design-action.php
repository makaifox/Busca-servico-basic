<?php

require '../../config.php';
require '../../classes/Janeiro.php';

$janeiro = new Janeiro($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$janeiro->editJaneiroDesign($pecas,$impressoes);

header("Location: ../janeiro-editar.php");