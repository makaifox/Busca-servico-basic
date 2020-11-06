<?php

require '../../config.php';
require '../../classes/Maio.php';

$maio = new Maio($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clippings = filter_input(INPUT_POST, 'clippings');

$maio->editMaioImprensa($conteudos,$clippings);

header("Location: ../maio-editar.php");