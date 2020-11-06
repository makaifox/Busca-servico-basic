<?php

require '../../config.php';
require '../../classes/Julho.php';

$julho = new Julho($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$julho->editJulhoDesign($pecas,$impressoes);

header("Location: ../julho-editar.php");