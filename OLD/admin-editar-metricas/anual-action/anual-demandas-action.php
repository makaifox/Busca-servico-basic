<?php
require '../../config.php';
require '../../classes/Anual.php';

$anual = new Anual($pdo);

$ano = filter_input(INPUT_POST, 'ano');
$quantitativo = filter_input(INPUT_POST, 'quantitativo');
$qualitativo = filter_input(INPUT_POST, 'qualitativo');
$imp1 = filter_input(INPUT_POST, 'imp1');
$imp2 = filter_input(INPUT_POST, 'imp2');
$dg1 = filter_input(INPUT_POST, 'dg1');
$dg2 = filter_input(INPUT_POST, 'dg2');
$fav1 = filter_input(INPUT_POST, 'fav1');
$fav2 = filter_input(INPUT_POST, 'fav2');
$mds1 = filter_input(INPUT_POST, 'mds1');
$mds2 = filter_input(INPUT_POST, 'mds2');

$anual->editAnual2($ano, $quantitativo, $qualitativo, $imp1, $imp2, 
$dg1, $dg2, $fav1, $fav2, $mds1, $mds2);

header("Location: ../../admin.php");