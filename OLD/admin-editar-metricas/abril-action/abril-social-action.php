<?php

require '../../config.php';
require '../../classes/Abril.php';

$abril = new Abril($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$abril->editAbrilSocial($seguidores, $alcance);

header("Location: ../abril-editar.php");