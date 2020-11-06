<?php

require '../../config.php';
require '../../classes/Maio.php';

$maio = new Maio($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$maio->editMaioSocial($seguidores, $alcance);

header("Location: ../maio-editar.php");