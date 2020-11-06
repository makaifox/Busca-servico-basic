<?php

require '../../config.php';
require '../../classes/Marco.php';

$marco = new Marco($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');


$marco->editMarcoImprensa($conteudos,$clipings);

//header("Location: ../marco-editar.php");