<?php

require '../../config.php';
require '../../classes/Novembro.php';

$novembro = new Novembro($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');


$novembro->editNovembroImprensa($conteudos,$clipings);

header("Location: ../novembro-editar.php");