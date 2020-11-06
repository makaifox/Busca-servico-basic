<?php

require '../../config.php';
require '../../classes/Outubro.php';

$outubro = new Outubro($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');

$outubro->editOutubroImprensa($conteudos,$clipings);

header("Location: ../outubro-editar.php");