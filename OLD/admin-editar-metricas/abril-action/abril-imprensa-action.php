<?php

require '../../config.php';
require '../../classes/Abril.php';

$abril = new Abril($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clippings = filter_input(INPUT_POST, 'clippings');

$abril->editAbrilImprensa($conteudos,$clippings);

header("Location: ../abril-editar.php");