<?php

require '../../config.php';
require '../../classes/fevereiro.php';

$fevereiro = new Fevereiro($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$fevereiro->editFevereiroSocial($seguidores, $alcance);

header("Location: ../fevereiro-editar.php");