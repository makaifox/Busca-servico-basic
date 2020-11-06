<?php

require '../../config.php';
require '../../classes/Junho.php';

$junho = new Junho($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$junho->editJunhoSocial($seguidores, $alcance);

header("Location: ../junho-editar.php");