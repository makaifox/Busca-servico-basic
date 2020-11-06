<?php

require '../../config.php';
require '../../classes/Julho.php';

$julho = new Julho($pdo);

$seguidores = filter_input(INPUT_POST, 'seguidores');
$alcance = filter_input(INPUT_POST, 'alcance');

$julho->editJulhoSocial($seguidores, $alcance);

header("Location: ../julho-editar.php");