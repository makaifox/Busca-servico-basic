<?php

require '../../config.php';
require '../../classes/Julho.php';

$julho = new Julho($pdo);

$conteudos = filter_input(INPUT_POST, 'conteudos');
$clipings = filter_input(INPUT_POST, 'clippings');

$julho->editJulhoImprensa($conteudos,$clipings);

header("Location: ../julho-editar.php");