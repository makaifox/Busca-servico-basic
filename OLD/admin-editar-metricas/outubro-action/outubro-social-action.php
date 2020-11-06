<?php

require '../../config.php';
require '../../classes/Outubro.php';

$outubro = new Outubro($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$outubro->editOutubroSocial($seguidores, $alcance);

header("Location: ../outubro-editar.php");