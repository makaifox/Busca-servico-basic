<?php

require '../../config.php';
require '../../classes/Fevereiro.php';

$fevereiro = new Fevereiro($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');

$fevereiro->editFevereiroImprensa($conteudos,$clipings);

header("Location: ../fevereiro-editar.php");