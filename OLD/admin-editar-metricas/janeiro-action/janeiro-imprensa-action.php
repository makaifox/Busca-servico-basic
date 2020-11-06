<?php

require '../../config.php';
require '../../classes/Janeiro.php';

$janeiro = new Janeiro($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');


$janeiro->editJaneiroImprensa($conteudos,$clipings);

header("Location: ../janeiro-editar.php");