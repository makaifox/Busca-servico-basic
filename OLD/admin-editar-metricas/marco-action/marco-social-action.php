<?php

require '../../config.php';
require '../../classes/Marco.php';

$marco = new Marco($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$marco->editMarcoSocial($seguidores, $alcance);

header("Location: ../marco-editar.php");