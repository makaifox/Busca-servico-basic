<?php

require '../../config.php';
require '../../classes/Dezembro.php';

$dezembro = new Dezembro($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$dezembro->editDezembroSocial($seguidores, $alcance);

header("Location: ../dezembro-editar.php");