<?php

require '../../config.php';
require '../../classes/Agosto.php';

$agosto = new Agosto($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');

$agosto->editAgostoImprensa($conteudos,$clipings);

header("Location: ../agosto-editar.php");