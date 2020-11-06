<?php

require '../../config.php';
require '../../classes/Janeiro.php';

$janeiro = new Janeiro($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$janeiro->editJaneiroSocial($seguidores, $alcance);

header("Location: ../janeiro-editar.php");