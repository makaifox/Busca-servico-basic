<?php

require '../../config.php';
require '../../classes/Novembro.php';

$novembro = new Novembro($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$novembro->editNovembroDesign($pecas,$impressoes);

header("Location: ../novembro-editar.php");