<?php

require '../../config.php';
require '../../classes/Dezembro.php';

$dezembro = new Dezembro($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');

$dezembro->editDezembroImprensa($conteudos,$clipings);

header("Location: ../dezembro-editar.php");