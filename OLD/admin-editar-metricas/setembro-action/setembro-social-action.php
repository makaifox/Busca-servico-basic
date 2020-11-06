<?php

require '../../config.php';
require '../../classes/Setembro.php';

$setembro = new Setembro($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$setembro->editSetembroSocial($seguidores, $alcance);

header("Location: ../setembro-editar.php");