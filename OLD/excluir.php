<?php

require './classes/Usuario.php';
require './config.php'; 

$user = new Usuario($pdo);
$id = filter_input(INPUT_GET, 'id');
$user->delete($id);
header("location: admin.php");
