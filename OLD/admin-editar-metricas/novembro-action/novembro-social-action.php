<?php

require '../../config.php';
require '../../classes/Novembro.php';

$novembro = new Novembro($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$novembro->editNovembroSocial($seguidores, $alcance);

header("Location: ../novembro-editar.php");