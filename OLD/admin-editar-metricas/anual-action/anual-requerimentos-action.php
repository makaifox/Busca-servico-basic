<?php
require '../../config.php';
require '../../classes/Anual.php';

$anual = new Anual($pdo);

$ano = filter_input(INPUT_POST, 'ano');
$semgov = filter_input(INPUT_POST, 'semgov');
$semus = filter_input(INPUT_POST, 'semus');
$semas = filter_input(INPUT_POST, 'semas');
$semed = filter_input(INPUT_POST, 'semed');
$semsopc = filter_input(INPUT_POST, 'semsopc');
$setrade = filter_input(INPUT_POST, 'setrade');
$gabinete = filter_input(INPUT_POST, 'gabinete');
$procon = filter_input(INPUT_POST, 'procon');
$forum = filter_input(INPUT_POST, 'forum');
$semcelt = filter_input(INPUT_POST, 'semcelt');
$semef = filter_input(INPUT_POST, 'semef');
$semmurb = filter_input(INPUT_POST, 'semmurb');
$defesaCivil = filter_input(INPUT_POST, 'defesaCivil');


$anual->editAnual($ano, $semgov, $semus, $semas, $semimsp, $semsopc);
header("Location: ../../admin.php");