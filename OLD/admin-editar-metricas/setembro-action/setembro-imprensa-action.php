<?php

require '../../config.php';
require '../../classes/Setembro.php';

$setembro = new Setembro($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');

$setembro->editSetembroImprensa($conteudos,$clipings);

header("Location: ../setembro-editar.php");