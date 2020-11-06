<?php

require '../../config.php';
require '../../classes/Fevereiro.php';

$fevereiro = new Fevereiro($pdo);

$pecas = filter_input(INPUT_POST, 'pecas');
$impressoes = filter_input(INPUT_POST, 'impressoes');

$fevereiro->editFevereiroDesign($pecas,$impressoes);

header("Location: ../fevereiro-editar.php");