<?php

require '../../config.php';
require '../../classes/Junho.php';

$junho = new Junho($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');


$junho->editJunhoImprensa($conteudos,$clipings);

header("Location: ../junho-editar.php");